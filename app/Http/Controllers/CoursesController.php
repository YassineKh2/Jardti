<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\CourseCategory;

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
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'pdf' => 'required|mimes:pdf|max:10000', // Validate the PDF file
            'course_category_id' => 'required|exists:course_categories,id', // Make sure category exists
        ]);

        // Store the uploaded PDF file
        $pdfPath = $request->file('pdf')->store('public/courses');

        // Create the course record
        Course::create([
            'title' => $request->title,
            'description' => $request->description,
            'pdf' => $pdfPath,
            'course_category_id' => $request->course_category_id,
        ]);

        return redirect()->route('courses.index')->with('success', 'Course created successfully!');
    }

    // Display the specified course
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
            $pdfPath = $request->file('pdf')->store('public/courses');
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
        $course->delete();

        return redirect()->route('courses.index')->with('success', 'Course deleted successfully!');
    }
}
