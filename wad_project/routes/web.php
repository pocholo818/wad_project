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
// Route::view('/home', 'home');
// Route::view('/welcome', 'welcome');
// Route::view('/create', 'create');

Route::get('/', [App\Http\Controllers\PageController::class, 'index']);
Route::resource('/products', App\Http\Controllers\ProductController::class);
// Route::resource('/create', App\Http\Controllers\ProductController::class, 'create');
// Route::get('/about', [App\Http\Controllers\PageController::class, 'about']);
