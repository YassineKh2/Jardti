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
Route::get('/courses/by-category/{id}', [CoursesController::class, 'getCoursesByCategory']);
//Route::get('/courses/category/{id}', [CoursesController::class, 'showCoursesByCategory'])->name('courses.byCategory');
Route::get('/courses/search', [CoursesController::class, 'search'])->name('courses.search');
Route::get('/courses/{categoryId?}', [CoursesController::class, 'showCoursesByCategory'])->name('courses.byCategory');

Route::get('/courses', function () {
    $categories = \App\Models\CourseCategory::all();
    return view('courses.frontend', [
        'categories' => $categories,
        'title' => 'Courses'  // Pass the title here
    ]);
});

