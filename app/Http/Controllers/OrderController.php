<?php



namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log; // Don't forget to import the Log facade
use Illuminate\Support\Facades\DB; 

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

    public function addToCart(Request $request, $productId)
    {
        // Assuming the static user ID is 1
        $userId = 1;

        // Validate the quantity; it's optional because we'll default to 1
        $request->validate([
            'quantity' => 'integer|min:1', // Make it optional
        ]);

        // Use the provided quantity or default to 1
        $quantity = $request->input('quantity', 1);

        // Find the product by ID
        $product = Product::find($productId);

        if (!$product) {
            return response()->json(['error' => 'Product not found'], 404);
        }

        // Create or retrieve the order for the user
        $order = Order::firstOrCreate(
            ['user_id' => $userId, 'status' => 'pending'] // Adjust the status as needed
        );

        // Check if the product is already in the order
        $existingProduct = $order->products()->where('product_id', $productId)->first();

        if ($existingProduct) {
            // Update the quantity if the product already exists in the order
            $newQuantity = $existingProduct->pivot->quantity + $quantity;
            $order->products()->updateExistingPivot($productId, ['quantity' => $newQuantity]);
            return redirect()->route('order.showcart')->with('success', 'Order updated successfully.');
        }

        // Attach the product to the order with the specified or default quantity
        $order->products()->attach($productId, ['quantity' => $quantity, 'price' => $product->price]);
        return redirect()->route('order.showcart')->with('success', 'Order updated successfully.');
    }
    public function showCart()
    {
        // Assuming a static user with ID 1
        $userId = 1; // Replace with the actual user ID as needed

        // Retrieve the order for the user (assuming it has a 'pending' status)
        $order = Order::where('user_id', $userId)->where('status', 'pending')->first();

        

        // Retrieve the products in the order along with their quantities and prices
        $products = $order->products()->withPivot('quantity', 'price')->get();

        // Prepare a response with the cart details
        $cartDetails = [
            'order_id' => $order->id,
            'products' => $products->map(function ($product) {
                return [
                    'id' => $product->id,
                    'image' => $product->image,
                    'name' => $product->name, // Assuming the Product model has a name property
                    'quantity' => $product->pivot->quantity,
                    'price' => $product->pivot->price,
                    'total_price' => $product->pivot->quantity * $product->pivot->price, // Calculate total price for this product
                ];
            }),
            'total_amount' => $products->sum(function ($product) {
                return $product->pivot->quantity * $product->pivot->price; // Total amount of the cart
            }),
        ];

        // Return the cart details as a JSON response
        return view('FrontOffice.myCart', compact('cartDetails'));
    }
    public function removeProduct($productId)
    {
        // Retrieve the static user's active order
        $order = Order::where('user_id', 1)->where('status', 'pending')->first();

        if (!$order) {
            return redirect()->back()->with('error', 'No active order found.');
        }

        // Detach the product from the order (remove it from the cart)
        $order->products()->detach($productId);

        return redirect()->back()->with('success', 'Product removed from cart.');
    }
    public function updateStatus(Request $request, $id)
    {
        // Find the order by ID
        $order = Order::findOrFail($id);

        // Loop through each product in the order and adjust the quantity
        foreach ($order->products as $product) {
            // Find the pivot entry to get the quantity ordered for each product
            $quantityOrdered = $product->pivot->quantity;

            // Reduce the product quantity in the database
            $product->quantity -= $quantityOrdered;

            // Save the updated product quantity
            $product->save();
        }

        // Update the order status to 'submitted'
        $order->status = 'submitted';
        $order->save();

        // Redirect or respond with a success message
        return redirect()->route('FrontOffice.productsList')->with('success', 'Order submitted and product quantities updated successfully.');
    }


    public function getCartCount()
    {
        $cartCount = Order::where('user_id', 1)->where('status', 'pending')->withCount('products')->first()->products_count ?? 0;


        return response()->json(['count' => $cartCount]);
    }

    public function OrdersStats($period = null)
    {
        $period = $period ?? 'day';

        // Get statistics for order statuses
        $orderStats = Order::selectRaw('status, COUNT(*) as count')
            ->groupBy('status')
            ->get();

        // Prepare data for the pie chart
        $labels = $orderStats->pluck('status')->toArray(); // Get the status labels as an array
        $data = $orderStats->pluck('count')->toArray(); // Get the count of orders as an array

        // Get today's date
        $today = Carbon::today();

        // Fetch orders created today
        $ordersToday = Order::whereDate('created_at', $today)
            ->with('user') // Load user details if necessary
            ->get();

        // Count the number of orders created today
        $ordersTodayCount = $ordersToday->count();

        // Get top 5 users by order count
        $topUsers = Order::selectRaw('user_id, COUNT(*) as order_count')
            ->groupBy('user_id')
            ->orderByDesc('order_count')
            ->with('user') // Load user details using the relationship
            ->take(5)
            ->get();

        // Format the top users for better output
        $topUsers = $topUsers->map(function ($user) {
            return [
                'id' => $user->user_id, // user_id from the pivot
                'name' => $user->user->name ?? 'Unknown', // Assuming 'name' is a column in the User model
                'total_orders' => $user->order_count,
                'last_order_date' => Order::where('user_id', $user->user_id)->latest()->value('created_at'), // Fetch the last order date
            ];
        });
        // Determine the date format based on the selected period (day, month, year)
        switch ($period) {
            case 'month':
                $dateFormat = '%Y-%m'; // Group by month
                break;
            case 'year':
                $dateFormat = '%Y'; // Group by year
                break;
            case 'day':
            default:
                $dateFormat = '%Y-%m-%d'; // Group by day
                break;
        }

        // Query the orders grouped by the chosen date format
        $ordersOverTime = Order::select(DB::raw("DATE_FORMAT(created_at, '$dateFormat') as date"), DB::raw("COUNT(*) as total_orders"))
            ->groupBy(DB::raw("DATE_FORMAT(created_at, '$dateFormat')")) // Group based on the selected period
            ->orderBy('date', 'asc') // Sort by date ascending
            ->get();


        // Prepare data for the chart
        $labels1 = $ordersOverTime->pluck('date')->toArray(); // Extract the date labels
        $data1 = $ordersOverTime->pluck('total_orders')->toArray(); // Extract the total order counts

        // Pass all necessary data to the view
        return view('orders.stats', compact(
            'labels',
            'data',
            'ordersOverTime',
            'ordersToday',
            'topUsers',
            'labels1',
            'data1'
        ));

        // Pass all necessary data to the view
    }


}
