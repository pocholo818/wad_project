<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    return view('welcome');
});

// to be deleted
// im still testing stuff here since i have to try them first
// thats all ty

// display/view only url
Route::view('/home', 'home');
Route::view('/welcome', 'welcome');
Route::view('/inventory', 'inventory');

// Route::view('/home', 'home', ['content' => 'I am content.']);

//test
// Route::get('/test', function(){
//     return 'i am test';
// });

// redirection
// Route::redirect('/', '/test');

// POST/GET
// Route::get('/class', function(Request $request){
    
//     $fname = $_POST['fname'];
//     $lname = $_GET['lname'];
//     $request->nameofinput;

//     return $request;
// });