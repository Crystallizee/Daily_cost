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

// Route::get('/', function () {
//     return view('layout.main');
// });
// Route::get('/', function () {
//     return view('thisMonth');
// });
Route::get('/all',[ExpenseController::class,'index'])->middleware('auth');
Route::get('/ThisMonth',[ExpenseController::class,'showCurrentMonth'])->middleware('auth');
Route::get('/thisYear',[ExpenseController::class,'showCurrentYear'])->middleware('auth');
Route::get('/login',[LoginController::class,'index'])->middleware('guest');
Route::post('/login',[LoginController::class,'authenticate']);
Route::post('/logout',[LoginController::class,'logout']);

