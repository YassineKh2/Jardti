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
        $categories = CourseCategory::all();
        return view('categories.index', compact('categories'));
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
