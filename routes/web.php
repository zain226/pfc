<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;

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
    return view('comming_soon');
});

Route::get('/under_review/home', function () {
    return view('frontend/index');
})->name('home');
Route::get('/about-us', [HomeController::class,'aboutUs'])->name('about');
Route::get('/service-details', [HomeController::class,'serviceDetails'])->name('service-details');
Route::get('/contact-us', [HomeController::class,'contactUs'])->name('contact');
Route::get('/faqs', [HomeController::class, 'faqs'])->name('faqs');

