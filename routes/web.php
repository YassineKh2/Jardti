<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\EventCategoryController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TaskController;

use \App\Http\Controllers\PointsController;
use \App\Http\Controllers\ItemController;



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



Route::get('/', function () {
    return view('indexFront');
});



Route::get('/back', function () {
    return view('index');
});

// ---------------------  Event Routes --------------------- //
Route::resource('/back/events', EventController::class);
Route::get('/back/calendar', [EventController::class, 'showCalendar'])->name('calendar');
Route::get('/event/timeline', [EventController::class, 'showTimeline'])->name('timelineEvent');
Route::resource('/back/event-categories', EventCategoryController::class);
Route::get('/events', [EventCategoryController::class, 'showCategories'])->name('eventsFront');
Route::get('/events', [EventController::class, 'showEventsFront'])->name('eventsFront');
Route::get('/export-events', [EventController::class, 'exportEvents']);
// Add this route for search by date
Route::get('/events/search-by-date', [EventController::class, 'searchByDate'])->name('events.searchByDate');



// --------------------- tasks  Routes --------------------- //

Route::resource('tasks', TaskController::class);


// ---------------------  General Routes --------------------- //




// --------------------- Gamification Shop Routes --------------------- //

Route::resource('/mypoints', PointsController::class);
Route::get('/mypoints/filter/{id}', [PointsController::class,'FilterByCategory'])->name('mypoints.filter');

Route::resource('/back/shop/categories', CategoryController::class);


Route::resource('/back/shop/items', ItemController::class);

// --------------------- Gamification Shop Routes --------------------- //




