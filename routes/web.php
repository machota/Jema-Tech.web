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
})->name('home');

Route::view('/about','about')->name('about');
Route::view('/service','service')->name('service');
Route::view('/product','product')->name('product');
Route::view('/ourteam','ourteam')->name('ourteam');
Route::view('/contact','contact')->name('contact');
Route::view('/why-us','why-us')->name('why-us');
Route::view('/service-provides','service-provides')->name('service-provides');
