<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Fetch all orders with related user and product
        $orders = Order::with(['user', 'product'])->get();
        $users = User::all();

        $products = Product::all();
        // Return view with orders data
        return view('orders.index', compact('orders', 'users', 'products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        $products = Product::all();
        return view('orders.create', compact('users', 'products'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'user_id' => 'required|exists:users,id',
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1',
            'status' => 'required|in:pending,completed,cancelled',
        ]);

        // Create the order (total_price will be calculated automatically)
        $order = Order::create($validatedData);

        return redirect()->route('orders.index')->with('success', 'Order created successfully.');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $order = Order::findOrFail($id);
        return view('orders.show', compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $order = Order::findOrFail($id);
        $users = User::all();
        $products = Product::all();
        return view('orders.edit', compact('order', 'users', 'products'));
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
        // Validate request data
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1',
            'status' => 'required|in:pending,completed,cancelled',
        ]);

        // Find the order by ID
        $order = Order::findOrFail($id);

        // Update the order fields
        $order->user_id = $request->user_id;
        $order->product_id = $request->product_id;
        $order->quantity = $request->quantity;
        $order->status = $request->status;

        // Recalculate total price using the product's price and quantity
        $product = Product::findOrFail($request->product_id);
        $order->total_price = $product->price * $order->quantity;

        // Save the updated order
        $order->save();

        // Redirect to orders index with a success message
        return redirect()->route('orders.index')->with('success', 'Order updated successfully.');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $order = Order::findOrFail($id);
        $order->delete();

        return redirect()->route('orders.index')->with('success', 'Commande supprimée avec succès.');
    }
}
