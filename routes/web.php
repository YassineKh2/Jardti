<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\EventCategoryController;

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

Route::get('/', function () {
    return view('index');
});

Route::get('/events', [EventController::class, 'index'])->name('events');
Route::get('/events/create', [EventController::class, 'create'])->name('events.create');
Route::post('/events', [EventController::class, 'store'])->name('events.store');
Route::get('/events/{id}/edit', [EventController::class, 'edit'])->name('events.edit');
Route::put('/events/{id}', [EventController::class, 'update'])->name('events.update');
Route::delete('/events/{id}', [EventController::class, 'destroy'])->name('events.destroy');
Route::get('/calendar', [EventController::class, 'showCalendar'])->name('calendar');
Route::get('/categories', [EventCategoryController::class, 'index'])->name('categories');
Route::get('/categories/create', [EventCategoryController::class, 'create'])->name('categories.create');
Route::post('/categories', [EventCategoryController::class, 'store'])->name('categories.store');
Route::get('/categories/{id}/edit', [EventCategoryController::class, 'edit'])->name('categories.edit');
Route::put('/categories/{id}', [EventCategoryController::class, 'update'])->name('categories.update');
Route::delete('/categories/{id}', [EventCategoryController::class, 'destroy'])->name('categories.destroy');
