<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\Testimonial;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\ContactController;

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

Route::get('/testimonials/create',[TestimonialController::class,'create']);
Route::post('/testimonials/create',[TestimonialController::class,'store']);
Route::get('testimonials', [TestimonialController::class,'index']);
Route::get('/testimonials/edit/{id}', [TestimonialController::class,'edit'])->name('edit_testimonial');
Route::put('testimonials/update', [TestimonialController::class,'update']);
Route::get('/admin/testimonial/list',[TestimonialController::class,'index']);
Route::delete('/delete_testimonial/{id}',[TestimonialController::class, 'destroy'])->name('delete_testimonial');
Route::post('contact', [App\Http\Controllers\ContactController::class,'store'])->name('contact.store');


