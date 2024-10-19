<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = Task::all();
        return view('tasks.index', compact('tasks'));    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
        // Validate the input data
        $data = $request->validate([
            'name' => 'required|string',
            'description' => 'nullable|string', // Optional description
            'status' => 'required|in:pending,completed', // Validate status to be either 'pending' or 'completed'
            'dueDate' => 'required|date', // Validate dueDate as a valid date
        ]);
    
        // Create the task using the validated data
        Task::create($data);
    
        // Redirect to the tasks index page
        return redirect()->route('tasks.index');
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
    public function edit(Task $task)
    {
        return view('tasks.edit', compact('task'));
    }
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  Task $task)
    {
           $data = $request->validate([
            'name' => 'required|string',
            'description' => 'nullable|string', // Optional description
            'status' => 'required|in:pending,completed', // Validate status to be either 'pending' or 'completed'
            'dueDate' => 'required|date', // Validate dueDate as a valid date
    ]);

    $task->update($data);
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
}
