<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function productsList()
    {
        $products = Product::all();
        $categories = Product::select('category')->distinct()->get();

        return view('FrontOffice.productsList', compact('products', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate request data
        $request->validate([
            'name' => 'required|max:255',
            'description' => 'nullable',
            'price' => 'required|numeric|min:0',
            'quantity' => 'required|integer|min:0',
            'category' => 'nullable|max:255','image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Image validation
        ]);

        // Handle image upload if exists
        $imagePath = $request->hasFile('image') ? $request->file('image')->store('products', 'public') : null;

        // Create a new product
        $product = new Product([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'category' => $request->category,'image' => $imagePath, // Store the image path
            // 'user_id' => auth()->id(), // Assign logged-in user as the product owner
        ]);

        $product->save();

        return redirect()->route('products.index')->with('success', 'Product created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('FrontOffice.productsDetails', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('products.edit', compact('product'));
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
            'name' => 'required|max:255',
            'description' => 'nullable',
            'price' => 'required|numeric|min:0',
            'quantity' => 'required|integer|min:0',
            'category' => 'nullable|max:255','image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Image validation
        ]);

        // Find the product by ID
        $product = Product::findOrFail($id);

        // Handle image update
        $imagePath = $product->image; // Keep the current image path
        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            if ($product->image) {
                Storage::disk('public')->delete($product->image);
            }
            $imagePath = $request->file('image')->store('products', 'public'); // Store new image
        }

        // Update the product
        $product->update([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'category' => $request->category,'image' => $imagePath, // Store the updated image path
        ]);

        return redirect()->route('products.index')->with('success', 'Product updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);

        // Delete the associated image if it exists
        if ($product->image) {
            Storage::disk('public')->delete($product->image);
        }

        // Delete the product
        $product->delete();

        return redirect()->route('products.index')->with('success', 'Product deleted successfully.');
    }
    public function getProductsByCategory($category)
    {
        // Récupérer les produits par catégorie
        $products = Product::where('category', $category)->get();

        // Retourner les produits en tant que JSON pour être utilisé côté frontend
        return response()->json($products);
    }
    public function search(Request $request)
    {
        $query = $request->input('query');

        // Search by name, description, or other attributes
        $products = Product::where('name', 'LIKE', "%$query%")
            ->orWhere('description', 'LIKE', "%$query%")
            ->paginate(10); // Adjust the number of items per page

        // Pass categories if needed
        $categories = Product::select('category')->distinct()->get();

        return view('FrontOffice.productsList', compact('products', 'categories'));
    }

    public function ProductStats()
    {
        // Total number of products
        $totalProducts = Product::count();

        // Total revenue from completed sales
        $totalRevenue = Order::with('products')
            ->where('status', 'completed') // Only include completed orders
            ->get()
            ->sum(function ($order) {
                return $order->products->sum(function ($product) {
                    // Ensure pivot is not null and has 'quantity' and 'price'
                    return ($product->pivot->quantity ?? 0) * ($product->pivot->price ?? 0);
                });
            });

        // Total quantity of products sold (only from completed orders)
        $totalQuantitySold = Order::with('products')
            ->where('status', 'completed') // Only include completed orders
            ->get()
            ->sum(function ($order) {
                // Ensure pivot is not null
                return $order->products->sum(function ($product) {
                    return $product->pivot->quantity ?? 0;
                });
            });

        // Get top-selling products with their total sold quantity
        $topSellingProducts = Product::with(['orders' => function ($query) {
            $query->where('status', 'completed') // Only include completed orders
                ->select('orders.id')
                ->withPivot('quantity')
                ->withTimestamps();
        }])
            ->get()
            ->map(function ($product) {
                $totalSold = $product->orders->sum(function ($order) {
                    // Ensure pivot is not null
                    return $order->pivot->quantity ?? 0;
                });

                return [
                    'id' => $product->id,
                    'name' => $product->name,
                    'total_sold' => $totalSold,
                    'price' => $product->price,
                ];
            })
            ->sortByDesc('total_sold')
            ->take(10); // Get top 10 best-selling products

        // Calculate revenue by category for completed orders
        $revenueByCategory = Product::with(['orders' => function ($query) {
            $query->where('status', 'completed'); // Only include completed orders
        }])
            ->get()
            ->groupBy('category')
            ->map(function ($products, $category) {
                return $products->flatMap(function ($product) {
                    return $product->orders->map(function ($order) use ($product) {
                        // Ensure pivot is not null
                        return ($product->pivot->quantity ?? 0) * ($product->pivot->price ?? 0);
                    });
                })->sum();
            });

        // Get products with low stock
        $lowStockThreshold = 10; // Define the threshold for low stock
        $lowStockProducts = Product::where('quantity', '<', $lowStockThreshold)->get();

        // Prepare the statistics data
        $statistics = [
            'total_products' => $totalProducts,
            'total_revenue' => number_format($totalRevenue, 2),
            'total_quantity_sold' => $totalQuantitySold,
        ];

        return view('products.stats', compact('statistics', 'topSellingProducts', 'revenueByCategory', 'lowStockProducts'));
    }





}
