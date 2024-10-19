<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\EventCategoryController;
use App\Http\Controllers\CategoryController;


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
Route::get('/events', function () {
    return view('Events.eventsFront', ['title' => 'Events']);
})->name('eventsFront');

// ---------------------  General Routes --------------------- //




// ---------------------  Shop Routes --------------------- //

Route::resource('/mypoints', PointsController::class);

Route::resource('/back/shop/categories', CategoryController::class);

// --------------------- Shop Routes --------------------- //



