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
        $event->category_id = $request->category_id; // Save category_id

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
        $request->validate([
            'name' => 'required|string|max:255',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', 
        ]);

     
        $event = Event::findOrFail($id);

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path('images/Events'), $imageName);
            $imagePath = 'images/Events/' . $imageName;

            if ($event->image_path) {
                if (file_exists(public_path($event->image_path))) {
                    unlink(public_path($event->image_path));
                }
            }

            $event->image_path = $imagePath; 
        }

        $event->name = $request->name;
        $event->description = $request->description;
        $event->start_date = $request->start_date;
        $event->end_date = $request->end_date;
        $event->location = $request->location;
        $event->capacity = $request->capacity;
        $event->price = $request->price;
        $event->has_delay = $request->has('has_delay') ? true : false; 
        $event->category_id = $request->category_id; // Update category_id

       
        $event->save();

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
