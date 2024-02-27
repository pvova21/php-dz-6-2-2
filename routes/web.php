<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\StudentController;
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

Route::get('/', [GroupController::class, 'index'])->name('home');
Route::post('/groups/{group}/students', [StudentController::class, 'store'])->name('groups.students.store');
Route::get('/groups/{group}/students/create', [StudentController::class, 'create'])->name('groups.students.create');

Route::resource('groups', GroupController::class);
Route::resource('groups.students', StudentController::class)->shallow();
Route::resource('students', StudentController::class);
Route::get('groups/{group}/students/{student}', [StudentController::class, 'show'])->name('students.show');
Route::get('groups/{group}', [GroupController::class, 'show'])->name('groups.show');



