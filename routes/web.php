<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\Usercontroller;

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
Route::get('/login',function(){
    return view('login');
});

Route::get('/logout',function(){
    Session::forget('user');
    return redirect('login');
});
Route::view('/register','register');

Route::post('/login','App\Http\Controllers\Usercontroller@login');
Route::get('/','App\Http\Controllers\ProductController@index');
Route::get('/detail/{id}','App\Http\Controllers\ProductController@detail');
Route::post('/add_to_cart','App\Http\Controllers\ProductController@addToCart');
Route::get('/cart_list','App\Http\Controllers\ProductController@cartlist');
Route::get('removecart/{id}','App\Http\Controllers\ProductController@removeCart');
Route::get('ordernow/','App\Http\Controllers\ProductController@orderNow');
Route::post('/orderplace','App\Http\Controllers\ProductController@OrderPlace');
Route::get('/myorders','App\Http\Controllers\ProductController@MyOrders');
Route::post('/register','App\Http\Controllers\Usercontroller@ReGister');