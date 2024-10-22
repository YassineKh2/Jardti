<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\CourseCategory;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

class CoursesController extends Controller
{
    // Display a listing of the courses
    public function index()
    {
        $courses = Course::with('category')->get(); // Fetch all courses with their associated categories
        return view('courses.index', compact('courses'));
    }

    // Show the form for creating a new course
    public function create()
    {
        $categories = CourseCategory::all(); // Fetch all categories for dropdown
        return view('courses.create', compact('categories'));
    }

    // Store a newly created course in storage
    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'title' => 'required|string|max:255',
    //         'description' => 'nullable|string',
    //         'pdf' => 'required|mimes:pdf|max:10000', // Validate the PDF file
    //         'course_category_id' => 'required|exists:course_categories,id', // Ensure category exists
    //     ]);

    //     // Store the uploaded PDF file in the 'courses' directory on the 'public' disk
    //     $pdfPath = $request->file('pdf')->store('courses', 'public');

    //     // Create the course record
    //     Course::create([
    //         'title' => $request->title,
    //         'description' => $request->description,
    //         'pdf' => $pdfPath, // Save the path to the database
    //         'course_category_id' => $request->course_category_id,
    //     ]);

    //     return redirect()->route('courses.index')->with('success', 'Course created successfully!');
    // }

    // Display the specified course    
 


    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'pdf' => 'required|mimes:pdf|max:10000', // Validate PDF file
            'course_category_id' => 'required|exists:course_categories,id',
        ]);
    
        $pdfPath = $request->file('pdf')->store('courses', 'public');
        $pdfFullPath = storage_path('app/public/' . $pdfPath);
    
        $audioDir = storage_path('app/public/audio');
    
        if (!file_exists($audioDir)) {
            mkdir($audioDir, 0755, true);
        }
    
        $pdfFullPath = str_replace('\\', '/', $pdfFullPath);
        $audioDir = str_replace('\\', '/', $audioDir);
    
        $pythonScriptPath = storage_path('python/convert_pdf_to_audio.py');
        $pythonScriptPath = str_replace('\\', '/', $pythonScriptPath);
    
        $command = "python $pythonScriptPath \"$pdfFullPath\" \"$audioDir\" 2>&1";
        $output = shell_exec($command);
    
        $audioFileName = pathinfo($pdfPath, PATHINFO_FILENAME) . '.mp3';
        $audioFullPath = storage_path('app/public/audio/' . $audioFileName);
    
        if (!file_exists($audioFullPath)) {
            return back()->with('error', 'Failed to generate audio for the course. Please try again.');
        }
    
        Course::create([
            'title' => $request->title,
            'description' => $request->description,
            'pdf' => $pdfPath,
            'audio' => 'storage/audio/' . $audioFileName,
            'course_category_id' => $request->course_category_id,
        ]);
    
        // Redirect to the courses list page with a success message
        return redirect()->route('courses.index')->with('success', 'Course created successfully with audio!');
    }
    

    public function show($id)
    {
        $course = Course::with('category')->findOrFail($id); // Fetch the course along with its category
        return view('courses.show', compact('course'));
    }

    // Show the form for editing the specified course
    public function edit($id)
    {
        $course = Course::findOrFail($id); // Fetch the course to edit
        $categories = CourseCategory::all(); // Fetch all categories for dropdown
        return view('courses.edit', compact('course', 'categories'));
    }

    // Update the specified course in storage
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'pdf' => 'nullable|mimes:pdf|max:10000', // PDF is optional on update
            'course_category_id' => 'required|exists:course_categories,id',
        ]);

        $course = Course::findOrFail($id);

        // If a new PDF is uploaded, replace the old one
        if ($request->hasFile('pdf')) {
            // Delete the old PDF file
            if ($course->pdf && Storage::disk('public')->exists($course->pdf)) {
                Storage::disk('public')->delete($course->pdf);
            }

            // Store the new PDF
            $pdfPath = $request->file('pdf')->store('courses', 'public');
            $course->pdf = $pdfPath;
        }

        // Update course details
        $course->update([
            'title' => $request->title,
            'description' => $request->description,
            'course_category_id' => $request->course_category_id,
        ]);

        return redirect()->route('courses.index')->with('success', 'Course updated successfully!');
    }

    // Remove the specified course from storage
    public function destroy($id)
    {
        $course = Course::findOrFail($id);

        // Delete the associated PDF file if it exists
        if ($course->pdf && Storage::disk('public')->exists($course->pdf)) {
            Storage::disk('public')->delete($course->pdf);
        }

        $course->delete();

        return redirect()->route('courses.index')->with('success', 'Course deleted successfully!');
    }

    // Display courses by category 
    public function showCoursesByCategory($categoryId = null)
    {
        // Fetch all categories
        $categories = CourseCategory::all();
    
        // If no category ID is provided, default to the first category
        if (!$categoryId && $categories->isNotEmpty()) {
            $categoryId = $categories->first()->id;
        }
    
        // Fetch courses for the selected or default category
        $courses = Course::where('course_category_id', $categoryId)->get();
    
        // Pass the categories, courses, and selected category to the view
        return view('courses.frontend', [
            'categories' => $categories,
            'courses' => $courses,
            'selectedCategory' => CourseCategory::find($categoryId),
            'title' => 'Courses',
        ]);
    }
    
    // Search courses
    public function search(Request $request)
    {
        // Get the search query from the form input
        $query = $request->input('query');

        // Fetch courses that match the search query
        $courses = Course::where('title', 'like', '%' . $query . '%')
                         ->orWhere('description', 'like', '%' . $query . '%')
                         ->get();

        // Fetch all categories
        $categories = CourseCategory::all();

        // Return the view with the search results
        return view('courses.frontend', [
            'categories' => $categories,
            'courses' => $courses,
            'title' => 'Search Results for: ' . $query
        ]);
    }
}
