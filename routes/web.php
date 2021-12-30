<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;
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

Route::get('/',[PageController::class,"home"])->name("home");
Route::get('/productdetail',[PageController::class,"product"])->name("product");


//authentication
Route::get('/login', [AuthController::class,"login"])->name("login");
Route::get('/register',[AuthController::class,"register"])->name("register");