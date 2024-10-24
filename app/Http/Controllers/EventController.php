<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\EventCategory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;


class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Get all events
        $events = Event::all();

        // Get the count of events grouped by category
        $eventsByCategory = Event::select('category_id')
            ->with('category')
            ->groupBy('category_id')
            ->selectRaw('count(*) as total, category_id')
            ->get();

        // Get the current month and calculate events for the current month
        $currentMonth = now()->month;
        $eventsThisMonth = Event::whereMonth('start_date', $currentMonth)->count();

        // Get the number of events for each month during the current year
        $eventsPerMonth = Event::selectRaw('MONTH(start_date) as month, COUNT(*) as total')
            ->whereYear('start_date', now()->year)  // Filter events for the current year
            ->groupBy('month')
            ->orderBy('month')
            ->get()
            ->pluck('total', 'month')
            ->toArray();

        // Fill missing months with 0 events
        $eventsThisYear = [];
        for ($i = 1; $i <= 12; $i++) {
            $eventsThisYear[$i] = $eventsPerMonth[$i] ?? 0;
        }

        // Pass events, events by category, events this month, and events this year to the view
        return view('Events.event', compact('events', 'eventsByCategory', 'eventsThisMonth', 'eventsThisYear'));
    }



    public function showEventsFront(Request $request)
    {
        // Tous les événements pour la carte
        $events = Event::all();

        // Paginé pour la tab "All"
        $paginatedEvents = Event::paginate(3);

        // Paginé pour chaque catégorie
        $eventCategories = EventCategory::all()->map(function($category) {
            $category->eventsPaginated = $category->events()->paginate(3); // Paginé les événements par catégorie
            return $category;
        });

        return view('Events.eventsFront', compact('events', 'paginatedEvents', 'eventCategories'));
    }








    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = EventCategory::all(); // Get all categories
        return view('Events.create', compact('categories'));
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
            'name' => ['required', 'string', 'max:255', 'regex:/^[a-zA-Z\s]+$/'],
            'description' => 'required|string',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'location' => 'required|string',
            'category_id' => 'required',
            'capacity' => 'required|integer|min:1',
            'price' => 'required|numeric|min:0',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ], [
            'name.required' => 'The event name is required.',
            'name.string' => 'The event name must be a valid string.',
            'name.regex' => 'The event name must contain only letters and spaces.',
            'name.max' => 'The event name must not exceed 255 characters.',

            'description.required' => 'The event description is required.',
            'description.string' => 'The event description must be valid.',

            'start_date.required' => 'The start date is required.',
            'start_date.date' => 'The start date must be a valid date.',

            'end_date.required' => 'The end date is required.',
            'end_date.date' => 'The end date must be a valid date.',
            'end_date.after_or_equal' => 'The end date must be the same or later than the start date.',

            'location.required' => 'The location is required.',
            'location.string' => 'The location must be a valid string.',

            'category_id.required' => 'The event category is required.',
            'category_id.exists' => 'The selected category is invalid.',

            'capacity.required' => 'The capacity is required.',
            'capacity.integer' => 'The capacity must be a number.',
            'capacity.min' => 'The capacity must be at least 1.',

            'price.required' => 'The price is required.',
            'price.numeric' => 'The price must be a valid number.',
            'price.min' => 'The price must be at least 0.',

            'image.image' => 'The file must be an image.',
            'image.mimes' => 'The image must be a type of jpeg, png, jpg, or gif.',
            'image.max' => 'The image size must not exceed 2 MB.',
        ]);

        // Store image in /public/images/Events
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path('images/Events'), $imageName);
            $imagePath = 'images/Events/' . $imageName;
        } else {
            $imagePath = null;
        }

        // Create the event
        $event = new Event();
        $event->name = $request->name;
        $event->description = $request->description;
        $event->start_date = $request->start_date;
        $event->end_date = $request->end_date;
        $event->location = $request->location;
        $event->capacity = $request->capacity;
        $event->price = $request->price;
        $event->image_path = $imagePath;
        $event->has_delay = $request->has('has_delay') ? true : false;
        $event->category_id = $request->category_id;

        $event->save();

        return redirect()->route('events.index')->with('success', 'Event created successfully!');
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
        $categories = EventCategory::all(); // Get all categories
        return view('Events.edit', compact('event', 'categories'));
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
        // Validate the request with custom messages
        $request->validate([
            'name' => ['required', 'string', 'max:255', 'regex:/^[a-zA-Z\s]+$/'],
            'description' => 'required|string',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'location' => 'required|string',
            'category_id' => 'required',
            'capacity' => 'required|integer|min:1',
            'price' => 'required|numeric|min:0',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ], [
            'name.required' => 'The event name is required.',
            'name.string' => 'The event name must be a valid string.',
            'name.regex' => 'The event name must contain only letters and spaces.',
            'name.max' => 'The event name must not exceed 255 characters.',

            'description.required' => 'The event description is required.',
            'description.string' => 'The event description must be valid.',

            'start_date.required' => 'The start date is required.',
            'start_date.date' => 'The start date must be a valid date.',

            'end_date.required' => 'The end date is required.',
            'end_date.date' => 'The end date must be a valid date.',
            'end_date.after_or_equal' => 'The end date must be the same or later than the start date.',

            'location.required' => 'The location is required.',
            'location.string' => 'The location must be a valid string.',

            'category_id.required' => 'The event category is required.',
            'category_id.exists' => 'The selected category is invalid.',

            'capacity.required' => 'The capacity is required.',
            'capacity.integer' => 'The capacity must be a number.',
            'capacity.min' => 'The capacity must be at least 1.',

            'price.required' => 'The price is required.',
            'price.numeric' => 'The price must be a valid number.',
            'price.min' => 'The price must be at least 0.',

            'image.image' => 'The file must be an image.',
            'image.mimes' => 'The image must be a type of jpeg, png, jpg, or gif.',
            'image.max' => 'The image size must not exceed 2 MB.',
        ]);

        // Find the event by ID
        $event = Event::findOrFail($id);

        // Handle image upload
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path('images/Events'), $imageName);
            $imagePath = 'images/Events/' . $imageName;

            // Delete old image if it exists
            if ($event->image_path) {
                if (file_exists(public_path($event->image_path))) {
                    unlink(public_path($event->image_path));
                }
            }

            $event->image_path = $imagePath;
        }

        // Update the event with validated data
        $event->name = $request->name;
        $event->description = $request->description;
        $event->start_date = $request->start_date;
        $event->end_date = $request->end_date;
        $event->location = $request->location;
        $event->capacity = $request->capacity;
        $event->price = $request->price;
        $event->has_delay = $request->has('has_delay') ? true : false;
        $event->category_id = $request->category_id; // Update category_id

        // Save the updated event
        $event->save();

        // Redirect back to events index with success message
        return redirect()->route('events.index')->with('success', 'Event updated successfully!');
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

        return redirect()->route('events.index')->with('success', 'Event deleted successfully!');
    }

    public function showCalendar()
    {
        $events = Event::select('name as title', 'start_date as start', 'end_date as end')->get();
        return view('calendar', compact('events'));
    }

    public function showTimeLine()
    {
        $events = Event::select('name', 'description', 'start_date', 'end_date')
            ->orderBy('start_date', 'asc') // Ensure events are ordered by start date
            ->get();

        return view('Events.eventTimeline', compact('events'));
    }


    public function exportEvents()
    {
        $events = \App\Models\Event::all();

        // Create a new Spreadsheet object
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        $sheet->setCellValue('A1', 'ID');
        $sheet->setCellValue('B1', 'Name');
        $sheet->setCellValue('C1', 'Description');
        $sheet->setCellValue('D1', 'Location');
        $sheet->setCellValue('E1', 'Start Date');
        $sheet->setCellValue('F1', 'End Date');
        $sheet->setCellValue('G1', 'Capacity');
        $sheet->setCellValue('H1', 'Price');


        $row = 2;
        foreach ($events as $event) {
            $sheet->setCellValue('A' . $row, $event->id);
            $sheet->setCellValue('B' . $row, $event->name);
            $sheet->setCellValue('C' . $row, $event->description);
            $sheet->setCellValue('D' . $row, $event->location);
            $sheet->setCellValue('E' . $row, $event->start_date);
            $sheet->setCellValue('F' . $row, $event->end_date);
            $sheet->setCellValue('G' . $row, $event->capacity);
            $sheet->setCellValue('H' . $row, $event->price);
            $row++;
        }


        $writer = new Xlsx($spreadsheet);


        $fileName = 'events.xlsx';


        $tempFilePath = tempnam(sys_get_temp_dir(), $fileName);

        $writer->save($tempFilePath);


        return response()->download($tempFilePath, $fileName)->deleteFileAfterSend(true);
    }

    public function searchByDate(Request $request)
    {
        // Validate input dates
        $validated = $request->validate([
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
        ]);

        // Fetch events based on the date range
        $startDate = $request->start_date;
        $endDate = $request->end_date;

        $events = Event::whereBetween('start_date', [$startDate, $endDate])
            ->orWhereBetween('end_date', [$startDate, $endDate])
            ->get();

        // Log the events to check if the filtering works
        \Log::info('Filtered Events: ', $events->toArray());

        // Return the events as a JSON response
        return response()->json($events);
    }














}
