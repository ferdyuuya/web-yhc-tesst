<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\MaterialController;
use Illuminate\Auth\Events\Login;

// Login
Route::get('/login', [LoginController::class, 'index'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'postLogin'])->name('login.store');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Courses
Route::get('/courses', [CoursesController::class, 'index'])->middleware('auth')->name('courses.index');
Route::get('/courses/add', [CoursesController::class, 'create'])->middleware('auth')->name('courses.create');
Route::post('/courses/add', [CoursesController::class, 'store'])->middleware('auth')->name('courses.store');
Route::get('/courses/edit/{id}', [CoursesController::class, 'edit'])->middleware('auth')->name('courses.edit');
Route::put('/courses/edit/{id}', [CoursesController::class, 'update'])->middleware('auth')->name('courses.update');
Route::delete('/courses/{id}', [CoursesController::class, 'destroy'])->middleware('auth')->name('courses.destroy');
Route::get('/courses/show/{id}', [CoursesController::class, 'show'])->middleware('auth')->name('courses.show');

// material
Route::get('/courses/{courseId}/material', [MaterialController::class, 'index'])->name('material.index');
Route::get('/courses/{courseId}/material/create', [MaterialController::class, 'create'])->name('material.create');
Route::post('/courses/{courseId}/material', [MaterialController::class, 'store'])->name('material.store');

Route::get('/courses/{courseId}/material/{id}/edit', [MaterialController::class, 'edit'])->name('material.edit');
Route::put('/courses/{courseId}/material/{id}', [MaterialController::class, 'update'])->name('material.update');

Route::delete('/courses/material/{id}', [MaterialController::class, 'destroy'])->name('material.destroy');

Route::get('/', function () {
    return redirect('/courses');
});
