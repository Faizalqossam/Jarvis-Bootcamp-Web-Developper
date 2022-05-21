<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\HomeController;
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


Route::get('/',[HomeController::class, "index"]);
Route::get('/register',[AuthController::class, "register"]);
Route::get('/welcome',[AuthController::class, "welcome"]);

Route::get('table', [DataController::class,"index"]);
Route::get('/data-table', [DataController::class,"datatable"]);



