<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\Plant;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // Start with the base query and include the plant relationship
        $query = Task::with('plant'); // Eager load the plant relationship
    
        // Apply filters only if they are provided
        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }
    
        if ($request->filled('task_type')) {
            if ($request->task_type === 'plant-based') {
                $query->whereNotNull('plant_id'); // Filter for plant-based tasks
            } else {
                $query->whereNull('plant_id'); // Filter for general tasks
            }
        }
    
        // Execute the query to get tasks
        $tasks = $query->get();
    
        // Fetch all plants for the view (if needed for other purposes)
        $plants = Plant::all();
    
        // Return the view with tasks and plants
        return view('tasks.index', compact('tasks', 'plants'));
    }
    


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {        $plants = Plant::all(); // Fetch all plants

        return view('tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     public function store(Request $request)
     {
         // Validate the request
         $request->validate([
             'name' => 'required|string|max:255', // Required task name
             'description' => 'nullable|string', // Optional description
             'task_type' => 'required|in:general,plant-based', // Required task type
             'plant_id' => 'nullable|required_if:task_type,plant-based|exists:plants,id', // Required if task type is plant-based
             'status' => 'required|in:to do,doing,done', // Required status
             'dueDate' => 'required|date|after_or_equal:today', // Required due date
         ], [
             'name.required' => 'The task name is required.',
             'task_type.required' => 'Please select a task type.',
             'plant_id.required_if' => 'You must select a plant for plant-based tasks.',
             'plant_id.exists' => 'The selected plant is invalid.',
             'status.required' => 'Please select a task status.',
             'dueDate.date' => 'The due date must be a valid date.',
             'dueDate.after_or_equal' => 'The due date must be today or later.',
         ]);
     
         // Store the task and associate it with the authenticated user
         Task::create([
             'name' => $request->name,
             'description' => $request->description,
             'task_type' => $request->task_type,
             'plant_id' => $request->plant_id, // Optional, only if task_type is plant-based
             'status' => $request->status,
             'dueDate' => $request->dueDate,
             'user_id' => auth()->id(), // Associate the task with the authenticated user
         ]);
     
         return redirect()->route('tasks.index')->with('success', 'Task added successfully.');
     }
     
     
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      
    }
    
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Task $task)
{    $task = Task::with('plant')->findOrFail($id);

    // Validate only the fields that are present in the request
    $data = $request->validate([
        'name' => 'sometimes|required|string',
        'description' => 'nullable|string',
        'status' => 'sometimes|required|in:to do,doing,done', // Updated status options
        'dueDate' => 'sometimes|required|date',
    ]);

    // Update only the fields present in the $data array
    $task->update($data);

    // If the request was made via AJAX, return a JSON response
    if ($request->ajax()) {
        return response()->json(['success' => true, 'task' => $task]);
    }

    return redirect()->route('tasks.index');
}


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Task $task)
    {
        
    $task->delete();
    return redirect()->route('tasks.index');
    }


    public function updateStatus(Request $request, $id)
{
    $task = Task::findOrFail($id);
    $task->status = $request->input('status');
    $task->save();

    return response()->json(['success' => true]);
}

}
