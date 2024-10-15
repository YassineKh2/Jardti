<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\CategoryController;
use \App\Http\Controllers\PointsController;
use \App\Http\Controllers\CourseCategoriesController;
use \App\Http\Controllers\CoursesController;

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


// ---------------------  General Routes --------------------- //




// ---------------------  Shop Routes --------------------- //

Route::resource('/mypoints', PointsController::class);

Route::resource('/back/shop/categories', CategoryController::class);

// --------------------- Shop Routes --------------------- //


// Resource route for Course Categories

Route::resource('/back/course-categories', CourseCategoriesController::class);
Route::resource('/back/courses', CoursesController::class);
