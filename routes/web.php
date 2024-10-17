<?php

use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return redirect()->route('products.index');
// });

// Routes pour la gestion des produits (CRUD complet avec ProductController)
Route::resource('products', ProductController::class);
Route::resource('orders', OrderController::class);
 Route::get('/Client/ProductsList', [ProductController::class, 'productsList']);

