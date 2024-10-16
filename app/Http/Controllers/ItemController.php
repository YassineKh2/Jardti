<?php

namespace App\Http\Controllers;

use App\Http\Requests\ItemRequest;
use App\Models\Category;
use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $Items = Item::all();

        return view('Shop.Item.index', compact('Items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        $Categories = Category::all();

        return view('Shop.Item.create', compact('Categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(ItemRequest $request)
    {
        $validated = $request->validated();
        $item = new Item();

        $item->name = $request->name;
        $item->description = $request->description;
        $item->price = $request->price;
        $item->quantity = $request->quantity;
        $item->category_id = $request->category;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('shop/item', 'public');
            $item->image = '/storage/'.$imagePath;
        }
        else {
            $item->image = '/storage/shop/noimage.png';
        }

        $item->save();
        return redirect()->route('items.index');
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
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function edit($id)
    {
        $Categories = Category::all()->toArray();
        $item = Item::all()->find($id);
        if (!$item)
            return redirect('items.index');



        foreach ($Categories as $key => $category) {
            if ($category['id'] == $item->category_id) {
                $item->category_name = $category['name'];
                array_splice($Categories, $key, 1);
            }
        }



        return view('Shop.Item.edit', compact('Categories', 'item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(ItemRequest $request, $id)
    {
        $item = Item::all()->find($id);
        if (!$item)
            return redirect('items.index');

        $validated = $request->validated();

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('item/category', 'public');
            $Pathtoupdate = '/storage/'.$imagePath;
        }else{
            $Pathtoupdate = $item->image;
        }

        $item->update($request->all());
        $item->image = $Pathtoupdate;
        $item->category_id = $request->category;
        $item->update();
        return redirect()->route('items.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
