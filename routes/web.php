<?php

use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\LoginController;
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

// Route to store new expense
Route::get('/expense/create', [ExpenseController::class, 'create'])->middleware('auth');
Route::post('/expense/store', [ExpenseController::class, 'store'])->middleware('auth');
// Route to delete expense
Route::delete('/expense/{id}', 'ExpenseController@destroy')->middleware('auth');
Route::get('/all',[ExpenseController::class,'index'])->middleware('auth');
Route::get('/thisMonth',[ExpenseController::class,'showCurrentMonth'])->middleware('auth');
Route::get('/thisYear',[ExpenseController::class,'showCurrentYear'])->middleware('auth');
Route::get('/login',[LoginController::class,'index'])->middleware('guest');
Route::post('/login',[LoginController::class,'authenticate']);
Route::post('/logout',[LoginController::class,'logout']);

