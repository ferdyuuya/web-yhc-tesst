<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CoursesController;
use Illuminate\Auth\Events\Login;


//Login
Route::get('/login', [LoginController::class, 'index'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'postLogin'])->name('login.store');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

//Courses
Route::get('/courses', [CoursesController::class, 'index'])->middleware('auth')->name('courses.index');
Route::get('/courses/add', [CoursesController::class, 'create'])->middleware('auth')->name('courses.create');
Route::post('/courses/add', [CoursesController::class, 'store'])->middleware('auth')->name('courses.store');
Route::get('/courses/{id}/edit', [CoursesController::class, 'edit'])->middleware('auth')->name('courses.edit');
Route::put('/courses/{id}/edit', [CoursesController::class, 'update'])->middleware('auth')->name('courses.update');
Route::delete('/courses/{id}', [CoursesController::class, 'destroy'])->middleware('auth')->name('courses.destroy');

Route::get('/', function () {
    return view('welcome');
});



Route::get('/material', function () {
    return view('material.index');
});
// Auth::routes();

