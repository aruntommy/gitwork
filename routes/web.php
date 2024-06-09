<?php

use App\Http\Controllers\LogicController;
use App\Http\Controllers\StudentsController;
use App\Livewire\Counter;
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

Route::get('/', [LogicController::class,'index']);
Route::get('/get-students', [StudentsController::class,'getAllStudents']);
Route::get('/create', [StudentsController::class,'create']);
Route::post('/store', [StudentsController::class,'store']);
Route::get('/counter', Counter::class);
