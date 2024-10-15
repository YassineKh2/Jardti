<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EventCategory;

class EventCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = EventCategory::all();
        return view('Event_categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Event_categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:event_categories',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'nullable|string',
        ]);

        $category = new EventCategory();
        $category->name = $request->name;
        $category->description = $request->description;

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path('images/EventCategories'), $imageName);
            $category->image = 'images/EventCategories/' . $imageName;
        }

        $category->save();

        return redirect()->route('categories')->with('success', 'Event Category created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = EventCategory::findOrFail($id);
        return view('Event_categories.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = EventCategory::findOrFail($id);
        return view('Event_categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:event_categories,name,' . $id,
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'nullable|string',
        ]);

        // Find the category to update
        $category = EventCategory::findOrFail($id);

      $category->name = $request->name;
        $category->description = $request->description;

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path('images/EventCategories'), $imageName);
            $imagePath = 'images/EventCategories/' . $imageName;

           if ($category->image && file_exists(public_path($category->image))) {
                unlink(public_path($category->image));
            }

            $category->image = $imagePath;
        }

        // Save the updated category
        $category->save();

        return redirect()->route('categories')->with('success', 'Event Category updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = EventCategory::findOrFail($id);

        if ($category->image && file_exists(public_path($category->image))) {
            unlink(public_path($category->image));
        }

        $category->delete();

        return redirect()->route('categories')->with('success', 'Event Category deleted successfully!');
    }
}
