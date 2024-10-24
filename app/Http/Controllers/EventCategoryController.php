<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EventCategory;

class EventCategoryController extends Controller
{
    public function index()
    {
        $eventCategories = EventCategory::all();  // Event Category Model
        return view('Event_categories.index', compact('eventCategories'));  // Event Category Views
    }

    

    public function showCategories()
    {
        $eventCategories = EventCategory::all();  // Event Category Model
        return view('Events.eventsFront', compact('eventCategories'));  // Event Category Views
    }
    
    

    public function create()
    {
        return view('Event_categories.create');  // Event Category Views
    }

    public function store(Request $request)
    {
        // Validate the request with custom messages
        $request->validate([
            'name' => ['required', 'string', 'max:255', 'regex:/^[a-zA-Z\s]+$/', 'unique:event_categories,name'],
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ], [
            'name.required' => 'The category name is required.',
            'name.string' => 'The category name must be a valid string.',
            'name.regex' => 'The category name must contain only letters and spaces.',
            'name.max' => 'The category name must not exceed 255 characters.',
            'name.unique' => 'This category name already exists. Please choose a different name.',
    
            'description.string' => 'The description must be valid text.',
    
            'image.image' => 'The file must be an image.',
            'image.mimes' => 'The image must be a type of jpeg, png, jpg, or gif.',
            'image.max' => 'The image size must not exceed 2 MB.',
        ]);
    
        // Create new EventCategory
        $eventCategory = new EventCategory();
        $eventCategory->name = $request->name;
        $eventCategory->description = $request->description;
    
        // Handle image upload
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path('images/EventCategories'), $imageName);
            $eventCategory->image = 'images/EventCategories/' . $imageName;
        }
    
        // Save the event category to the database
        $eventCategory->save();
    
        // Redirect with success message
        return redirect()->route('event-categories.index')->with('success', 'Event Category created successfully!');
    }
    

    public function edit($id)
    {
        $eventCategory = EventCategory::findOrFail($id);
        return view('Event_categories.edit', compact('eventCategory'));  // Event Category Views
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:event_categories,name,' . $id,
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'nullable|string',
        ]);

        $eventCategory = EventCategory::findOrFail($id);
        $eventCategory->name = $request->name;
        $eventCategory->description = $request->description;

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path('images/EventCategories'), $imageName);
            $eventCategory->image = 'images/EventCategories/' . $imageName;
        }

        $eventCategory->save(); // Update the event category in the database

        return redirect()->route('event-categories.index')->with('success', 'Event Category updated successfully!');
    }

    public function destroy($id)
    {
        $eventCategory = EventCategory::findOrFail($id);

        if ($eventCategory->image && file_exists(public_path($eventCategory->image))) {
            unlink(public_path($eventCategory->image));
        }

        $eventCategory->delete(); // Delete the event category

        return redirect()->route('event-categories.index')->with('success', 'Event Category deleted successfully!');
    }
}

