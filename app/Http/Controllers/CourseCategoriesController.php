<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\CourseCategory;

class CourseCategoriesController extends Controller
{
    // Display a listing of the categories
    public function index()
    {
        // Fetch categories with their course count
        $categories = CourseCategory::withCount('courses')->get();
    
        // Filter out categories with 0 courses
        $filteredCategories = $categories->filter(function($category) {
            return $category->courses_count > 0;
        });
    
        // Prepare chart data for categories with courses
        $chartData = [
            'labels' => $filteredCategories->pluck('name')->toArray(), // Only categories with courses
            'data' => $filteredCategories->pluck('courses_count')->toArray(), // Only course counts > 0
        ];
    
        // Pass both the categories and chart data to the view
        return view('categories.index', compact('categories', 'chartData'));
    }
    
    


    // Show the form for creating a new category
    public function create()
    {
        return view('categories.create');
    }

    // Store a newly created category in storage
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        CourseCategory::create($request->only('name'));

        return redirect()->route('course-categories.index')->with('success', 'Category created successfully!');
    }

    // Display the specified category
    public function show($id)
    {
        $category = CourseCategory::with('courses')->findOrFail($id);
        return view('categories.show', compact('category'));
    }

    // Show the form for editing the specified category
    public function edit($id)
    {
        $category = CourseCategory::findOrFail($id);
        return view('categories.edit', compact('category'));
    }

    // Update the specified category in storage
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $category = CourseCategory::findOrFail($id);
        $category->update($request->only('name'));

        return redirect()->route('course-categories.index')->with('success', 'Category updated successfully!');
    }

    // Remove the specified category from storage
    public function destroy($id)
    {
        $category = CourseCategory::findOrFail($id);
        $category->delete();

        return redirect()->route('course-categories.index')->with('success', 'Category deleted successfully!');
    }
}
