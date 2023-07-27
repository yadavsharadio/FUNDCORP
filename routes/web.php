<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/productlist', function () {
    return view('productlist');
});

Route::get('/productdesc', function () {
    return view('productdesc');
});

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/ngo', function () {
    return view('ngo');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/signup', function () {
    return view('register');
});

Route::get('/myorder', function () {
    return view('myorder');
});

Route::get('/productgrid', function () {
    return view('productgrid');
});