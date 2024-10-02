<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $Categories = Category::all();

        return view('Shop.Category.index', compact('Categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('Shop.Category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws ValidationException
     */
    public function store(CategoryRequest $request)
    {

        $validated = $request->validated();
        $category = new Category();

        $category->name = $request->name;
        $category->description = $request->description;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('shop/category', 'public');
            $category->image = '/storage/'.$imagePath;
        }
        else {
            $category->image = '/storage/shop/noimage.png';
        }

        $category->save();
        return redirect()->route('categories.index');



    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function edit($id)
    {
        $category = Category::all()->find($id);
        if (!$category)
            return redirect('categories.index');

        return view('Shop.Category.edit', compact('category'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(CategoryRequest $request, $id)
    {
        $category = Category::all()->find($id);
        if (!$category)
            return redirect('categories.index');

        $validated = $request->validated();

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('shop/category', 'public');
            $Pathtoupdate = '/storage/'.$imagePath;
        }else{
            $Pathtoupdate = $category->image;
        }

        $category->update($request->all());
        $category->image = $Pathtoupdate;
        $category->update();
        return redirect()->route('categories.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {

        $category = Category::all()->find($id);
        $category->delete();
        return redirect()->route('categories.index');

    }
}
