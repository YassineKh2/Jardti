<?php

use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\EventCategoryController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\PointsController;
use App\Http\Controllers\CourseCategoriesController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\ProfileController;
use App\Models\Product;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



// ---------------------  General Routes --------------------- //



// Route::get('/', function () {
//     return redirect()->route('products.index');
// });

// Routes pour la gestion des produits (CRUD complet avec ProductController)
Route::resource('products', ProductController::class);
Route::resource('orders', OrderController::class)->middleware('auth');
Route::get('/Client/ProductsList', [ProductController::class, 'productsList'])->name('FrontOffice.productsList');
Route::post('/cart/add/{productId}', [OrderController::class, 'addToCart'])->name('cart.add')->middleware('auth');
Route::get('/cart', [OrderController::class, 'showCart'])->name('order.showcart')->middleware('auth');
Route::delete('/cart/{product}', [OrderController::class, 'removeProduct'])->name('cart.remove')->middleware('auth');
Route::post('/order/{id}/update-status', [OrderController::class, 'updateStatus'])->name('order.updateStatus')->middleware('auth');
Route::get('/api/cart-count', [OrderController::class, 'getCartCount'])->middleware('auth');
Route::get('/products/category/{category}', [ProductController::class, 'getProductsByCategory'])->middleware('auth');
Route::get('/search', [ProductController::class, 'search'])->name('products.search');
Route::get('/statistics/products', [ProductController::class, 'ProductStats'])->name('statistics.products')->middleware('auth');
Route::get('/statistics/orders/{period?}', [OrderController::class, 'OrdersStats'])->name('statistics.orders')->middleware('auth');

Route::get('/', function () {
    return view('indexFront');
});




Route::get('/back', function () {
    return view('index');
})->middleware('auth');

// --------------------- Event Routes --------------------- //
Route::middleware('auth')->group(function () {
    Route::resource('/back/events', EventController::class);
    Route::get('/back/calendar', [EventController::class, 'showCalendar'])->name('calendar');
    Route::get('/event/timeline', [EventController::class, 'showTimeline'])->name('timelineEvent');
    Route::resource('/back/event-categories', EventCategoryController::class);
});

// Frontend Event View
Route::get('/events', function () {
    return view('Events.eventsFront', ['title' => 'Events']);
})->name('eventsFront');

// --------------------- Tasks Routes --------------------- //
Route::resource('tasks', TaskController::class)->middleware('auth');

// --------------------- Gamification Shop Routes --------------------- //
Route::middleware('auth')->group(function () {
    Route::resource('/mypoints', PointsController::class);
    Route::get('/mypoints/filter/{id}', [PointsController::class, 'FilterByCategory'])->name('mypoints.filter');
    Route::resource('/back/shop/categories', CategoryController::class);
    Route::resource('/back/shop/items', ItemController::class);
});

// --------------------- Course Routes --------------------- //
Route::middleware('auth')->group(function () {
    Route::resource('/back/course-categories', CourseCategoriesController::class);
    Route::resource('/back/courses', CoursesController::class);
});

Route::get('/courses/by-category/{id}', [CoursesController::class, 'getCoursesByCategory']);
Route::get('/courses/search', [CoursesController::class, 'search'])->name('courses.search');
Route::get('/courses/{categoryId?}', [CoursesController::class, 'showCoursesByCategory'])->name('courses.byCategory');

Route::get('/courses', function () {
    $categories = \App\Models\CourseCategory::all();
    return view('courses.frontend', [
        'categories' => $categories,
        'title' => 'Courses'  // Pass the title here
    ]);
});

// --------------------- Dashboard & Profile Routes --------------------- //
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Auth Routes
require __DIR__.'/auth.php';
