<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;

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

// display/view only url
Route::view('/', 'index');
Route::view('/about', 'about');
// Route::view('/login', 'admin.login');
Route::view('/register', 'admin.register');

Route::resource('/products', App\Http\Controllers\ProductController::class);
Route::resource('/admin', App\Http\Controllers\AdminController::class);
