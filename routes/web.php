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
    return view('homepage');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/testimonials', function () {
    return view('testimonials');
});
Route::get('/gallery', function () {
    return view('gallery');
});
Route::get('/news', function () {
    return view('news');
});
Route::get('/faq', function () {
    return view('faq');
});
Route::get('/laser-eye', function () {
    return view('lasereyesurgery');
});
Route::get('/team', function () {
    return view('ourteam');
});
Route::get('/equipments', function () {
    return view('equipments');
});
Route::get('/appointments', function () {
    return view('appointments');
});