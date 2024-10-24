<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Plant;


class PlantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $plants = Plant::all(); // Fetch all plants
        $categories = ['Vegetables', 'Flowers', 'Herbs']; // Define your categories
        return view('plants.index', compact('plants', 'categories'));
}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'name' => 'required|string|max:255',
            'category' => 'required|string',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Process image upload
        $imagePath = null; // Initialize imagePath
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('storage/images/plants', 'public');
        }

        // Create the plant, associating it with the authenticated user
        Plant::create([
            'name' => $request->name,
            'category' => $request->category,
            'description' => $request->description,
            'image' => $imagePath, // Use image path if available
            'user_id' => auth()->id(), // Associate the plant with the authenticated user
        ]);

        return redirect()->route('plants.index')->with('success', 'Plant added successfully!');
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Plant $plant)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'category' => 'required|string',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Process image upload
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('storage/images/plants', 'public');
            $data['image'] =  $imagePath;
        }


        $plant->update($data);
        return redirect()->route('plants.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Plant $plant)
    {
        $plant->delete();
        return redirect()->route('plants.index');
    }
}
