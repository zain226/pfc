<?php

use App\Http\Controllers\ProfileController;
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
    return view('comming_soon');
});

Route::get('/under_review/home', function () {
    return view('frontend/index');
})->name('home');
Route::get('/about-us', [HomeController::class,'aboutUs'])->name('about');
Route::get('/service-details', [HomeController::class,'serviceDetails'])->name('service-details');
Route::get('/contact-us', [HomeController::class,'contactUs'])->name('contact');
Route::get('/faqs', [HomeController::class, 'faqs'])->name('faqs');

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';
