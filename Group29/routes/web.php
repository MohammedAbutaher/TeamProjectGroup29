<?php

use Illuminate\Support\Facades\Route;

/*
the next line
*/
use Illuminate\Support\Facades\Auth;
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
    return view('mainpage');
});

//Routes::Products daatabase 
Route::get('basket', 'App\Http\Controllers\ProductsController@list')->name('list');
Route::get('show/{id}', 'App\Http\Controllers\ProductsController@show');
//Routes::Image routes in products database 
Route::get('/basket', [App\Http\Controllers\ProductsController::class, 'create']);
Route::post('/basket', [App\Http\Controllers\ProductsController::class, 'store']);

//Route::Add from Products database to Image database  
Route::get('/checkout', [App\Http\Controllers\CartController::class, 'checkout'])->name('checkout');

Auth::routes();

//Route::view('home','home');

Route::view('products','products');

Route::view('contact_us','contact_us');

Route::view('about_us','about_us');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
