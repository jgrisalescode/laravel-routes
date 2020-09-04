<?php

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

Route::get('/', function () {
    return view('welcome');
});

// Return a simple view, perfect for static sites > uri, view, data[]
Route::view('/about', 'about');

// Acces to resources of a controller, 
// Create 7 posible routes for a CRUD, that's it !!!
// Remember you have to create a Controller with resources
// In this case I´m creating the controller and the model for pages
// php artisan make:controller PageController --resource --model=Page
Route::resource('pages', 'PageController');
