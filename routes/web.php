<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;

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


Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/services/{slug}', [App\Http\Controllers\HomeController::class, 'service'])->name('service');
Route::get('/categories/{slug}', [App\Http\Controllers\HomeController::class, 'category'])->name('category');

Route::get('/service-details.html', function () {
    return Redirect::to('https://tradecraft.co.ke/services/printing-services-in-nairobi', 301);
});

Route::get('/photocopy.html', function () {
    return Redirect::to('https://tradecraft.co.ke/services/photocopying-services-in-kenya', 301);
});

Route::get('/lamination.html', function () {
    return Redirect::to('https://tradecraft.co.ke/services/lamination-services-in-nairobi', 301);
});

Route::get('/binding.html', function () {
    return Redirect::to('https://tradecraft.co.ke/services/binding-services-in-nairobi', 301);
});

Route::get('/graphic.html', function () {
    return Redirect::to('https://tradecraft.co.ke/services/graphic-design-services-in-nairobi', 301);
});

Route::get('/branding.html', function () {
    return Redirect::to('https://tradecraft.co.ke/services/branding-services-in-nairobi', 301);
});

Route::get('/scanning.html', function () {
    return Redirect::to('https://tradecraft.co.ke/services/scanning-services-in-nairobi', 301);
});

Route::get('/printing.html', function () {
    return Redirect::to('https://tradecraft.co.ke/services/printing-services-in-nairobi', 301);
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

