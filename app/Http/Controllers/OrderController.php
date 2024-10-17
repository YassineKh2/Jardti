<?php



namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log; // Don't forget to import the Log facade

class OrderController extends Controller
{
    // Display a listing of the orders
    public function index()
    {
        $orders = Order::with(['user', 'products'])->get(); // Eager load user and products
        $users = User::all();
        $products = Product::all();

        return view('orders.index', compact('orders', 'users', 'products'));
    }

    // Show the form for creating a new order
    public function create()
    {
        $users = User::all();
        $products = Product::all();

        return view('orders.create', compact('users', 'products'));
    }

    // Store a newly created order in storage

    public function store(Request $request)
    {
        // Log the request data

        $request->validate([
            'user_id' => 'required|exists:users,id',
            'status' => 'required|string',
            'products' => 'required|array',
            'products.*.product_id' => 'required|exists:products,id',
            'products.*.quantity' => 'required|integer|min:1',
        ]);

        $order = new Order();
        $order->user_id = $request->user_id;
        $order->status = $request->status;
    
        $order->save(); // Save the order first
        // Attach products to the order with the quantity

        foreach ($request->products as $product) {
            $order->products()->attach($product['product_id'], [
                'quantity' => $product['quantity'],
                'price' => Product::find($product['product_id'])->price, // Assuming you want to store the current product price
            ]);
        }

        return redirect()->route('orders.index')->with('success', 'Order created successfully.');
    }

    // Show the form for editing the specified order
    public function edit(Order $order)
    {
        $users = User::all();
        $products = Product::all();

        return view('orders.edit', compact('order', 'users', 'products'));
    }

    // Update the specified order in storage
    public function update(Request $request, Order $order)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'status' => 'required|string',
            'products' => 'required|array',
            'products.*.product_id' => 'required|exists:products,id',
            'products.*.quantity' => 'required|integer|min:1',
        ]);

        $order->user_id = $request->user_id;
        $order->status = $request->status;
        $order->save(); // Save the order first

        // Sync products with the order
        $order->products()->sync([]);
        foreach ($request->products as $product) {
            $order->products()->attach($product['product_id'], [
                'quantity' => $product['quantity'],
                'price' => Product::find($product['product_id'])->price,
            ]);
        }

        return redirect()->route('orders.index')->with('success', 'Order updated successfully.');
    }

    // Remove the specified order from storage
    public function destroy(Order $order)
    {
        $order->products()->detach(); // Detach products before deleting the order
        $order->delete();

        return redirect()->route('orders.index')->with('success', 'Order deleted successfully.');
    }

    // Mark order as completed
    public function complete(Order $order)
    {
        $order->markAsCompleted();

        return redirect()->route('orders.index')->with('success', 'Order marked as completed.');
    }

    // Cancel the order
    public function cancel(Order $order)
    {
        $order->cancel();

        return redirect()->route('orders.index')->with('success', 'Order cancelled successfully.');
    }
}
