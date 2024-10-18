<?php

use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\CategoryController;
use \App\Http\Controllers\PointsController;
use \App\Http\Controllers\ItemController;
use App\Models\Product;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



// ---------------------  General Routes --------------------- //



// Route::get('/', function () {
//     return redirect()->route('products.index');
// });

// Routes pour la gestion des produits (CRUD complet avec ProductController)
Route::resource('products', ProductController::class);
Route::resource('orders', OrderController::class);
Route::get('/Client/ProductsList', [ProductController::class, 'productsList'])->name('FrontOffice.productsList');
Route::post('/cart/add/{productId}', [OrderController::class, 'addToCart'])->name('cart.add');
Route::get('/cart', [OrderController::class, 'showCart'])->name('order.showcart');
Route::delete('/cart/{product}', [OrderController::class, 'removeProduct'])->name('cart.remove');
Route::post('/order/{id}/update-status', [OrderController::class, 'updateStatus'])->name('order.updateStatus');
Route::get('/api/cart-count', [OrderController::class, 'getCartCount']);
Route::get('/products/category/{category}', [ProductController::class, 'getProductsByCategory']);
Route::get('/search', [ProductController::class, 'search'])->name('products.search');
Route::get('/statistics/products', [ProductController::class, 'ProductStats'])->name('statistics.products');
Route::get('/statistics/orders/{period?}', [OrderController::class, 'OrdersStats'])->name('statistics.orders');

Route::get('/', function () {
    return view('indexFront');
});




Route::get('/back', function () {
    return view('index');
});


// ---------------------  General Routes --------------------- //




// --------------------- Gamification Shop Routes --------------------- //

Route::resource('/mypoints', PointsController::class);
Route::get('/mypoints/filter/{id}', [PointsController::class,'FilterByCategory'])->name('mypoints.filter');

Route::resource('/back/shop/categories', CategoryController::class);


Route::resource('/back/shop/items', ItemController::class);

// --------------------- Gamification Shop Routes --------------------- //



