<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::all();
        return view('Events.event', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Events.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate the request (optional)
        $request->validate([
            'name' => 'required|string|max:255',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Validation for image
        ]);
    
        // Store image in /public/images/Events
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path('images/Events'), $imageName);
            $imagePath = 'images/Events/' . $imageName;
        } else {
            $imagePath = null;
        }
    
        // Create an Event instance
        $event = new Event();
        $event->name = $request->name;
        $event->description = $request->description;
        $event->start_date = $request->start_date;
        $event->end_date = $request->end_date;
        $event->location = $request->location;
        $event->capacity = $request->capacity;
        $event->price = $request->price;
        $event->image_path = $imagePath;
        $event->has_delay = $request->has('has_delay') ? true : false; // For the delay attribute
    
        $event->save();
    
        return redirect()->route('events')->with('success', 'Event created successfully!');
    }
    
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $event = Event::findOrFail($id);
        
        return view('Events.edit', compact('event'));
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
            'name' => 'required|string|max:255',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Validation for image
        ]);

        // Find the event by ID
        $event = Event::findOrFail($id);

        // If a new image is uploaded, store it
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path('images/Events'), $imageName);
            $imagePath = 'images/Events/' . $imageName;

            // Delete the old image (optional)
            if ($event->image_path) {
                if (file_exists(public_path($event->image_path))) {
                    unlink(public_path($event->image_path));
                }
            }

            $event->image_path = $imagePath; // Update the image path in the event
        }

        // Update the event with the request data
        $event->name = $request->name;
        $event->description = $request->description;
        $event->start_date = $request->start_date;
        $event->end_date = $request->end_date;
        $event->location = $request->location;
        $event->capacity = $request->capacity;
        $event->price = $request->price;
        $event->has_delay = $request->has('has_delay') ? true : false; // For the delay attribute

        // Save the changes
        $event->save();

        return redirect()->route('events')->with('success', 'Event updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    $event = Event::findOrFail($id);

    if ($event->image_path && file_exists(public_path($event->image_path))) {
        unlink(public_path($event->image_path)); 
    }

    $event->delete();

    return redirect()->route('events')->with('success', 'Event deleted successfully!');
    }
}
