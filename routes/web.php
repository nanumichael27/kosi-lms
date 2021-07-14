<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\UserController;
use App\Http\Livewire\Admin\ManageCourse;
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

Route::get('/',  fn() => view('index'))->name('index');

Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard');

Route::get('/favourites', [UserController::class, 'favourites'])->name('favourites');

Route::get('/my-courses', [UserController::class, 'courses'])->name('mycourses');

Route::get('/user-settings', [UserController::class, 'settings'])->name('settings');

Route::get('/coursepage/{id}', [CourseController::class, 'course'])->name('coursepage');

Route::get('/coursesearch', [CourseController::class, 'courses'])->name('coursesearch');


Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');

Route::get('/admin-courses', [AdminController::class, 'courses'])->name('admin.courses');

Route::post('/admin/create-course', [AdminController::class, 'createCourse'])->name('admin.createcourse');

Route::get('/admin/manage-course/{id}', ManageCourse::class)->name('admin.managecourse');