<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListUserController;

use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Expr\List_;

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

Route::get('userlist', [ListUserController::class, 'show']);

//Routes::Products Controller
//::Return array of products
Route::get('basket', 'App\Http\Controllers\ProductsController@list')->name('list');
//::Display product database 
Route::get('show/{id}', 'App\Http\Controllers\ProductsController@show');
//::Create entry in product database 
Route::get('/basket', [App\Http\Controllers\ProductsController::class, 'create']);
//::Store a entry in product database
Route::post('/basket', [App\Http\Controllers\ProductsController::class, 'store']);

//Route::Cart controller
//::Add from Products database to cart database  
Route::get('checkout', [App\Http\Controllers\CartController::class, 'checkout'])->name('checkout');
//::Display cart database
Route::get('/checkoutpage', [App\Http\Controllers\CartController::class, 'create']);
//::Remove from cart database
Route::get('remove', [App\Http\Controllers\CartController::class, 'remove']);

// admin 
// Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function () {
//     Route::get('userlist',[ListUserController::class,'show']);
// });

Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/adminpage', [App\Http\Controllers\HomeController::class, 'index']);
});

//Route::Order controller
Route::get('order', [App\Http\Controllers\OrdersController::class, 'order'])->name('order');

Route::view('products', 'products');

Route::view('contact_us', 'contact_us');

Route::view('about_us', 'about_us');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
