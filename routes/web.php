<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('form');
});


Route::post('/saved', [StudentController::class, 'save'])->name('student.save');
Route::get('/', [StudentController::class, 'show']);

Route::get('/userData', [UserController::class,'showData']);
Route::get('/{stu_id}/edit', [StudentController::class,'edit'])->name('student.edit');
Route::POST('/{stu_id}/update', [StudentController::class,'update'])->name('student.update');
Route::get('/{stu_id}/delete', [StudentController::class ,'delete'])->name('student.delete');
