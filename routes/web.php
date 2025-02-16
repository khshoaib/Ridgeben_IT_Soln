<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'index']);
Route::get('/contact', [PageController::class, 'contact']);
Route::get('/service', [PageController::class, 'service']);
Route::get('/about', [PageController::class, 'about']);
\Route::get('/website-design', [PageController::class, 'website-design']);


Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/service', function () {
    return view('service');
})->name('service');

Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/website-design', function () {
    return view('website-design');
})->name('website-design');

Route::get('/digital-marketing', function () {
    return view('digital-marketing');
})->name('digital-marketing');
Route::get('/machine-learning', function () {
    return view('machine-learning');
})->name('machine-learning');
Route::get('/search-engine-opt', function () {
    return view('search-engine-opt');
})->name('search-engine-opt');
Route::get('/graphics-design', function () {
    return view('graphics-design');
})->name('graphics-design');
Route::get('/video-editing', function () {
    return view('video-editing');
})->name('video-editing');

Route::get('/email-marketing', function () {
    return view('email-marketing');
})->name('email-marketing');
Route::get('/ui-ux-design', function () {
    return view('ui-ux-design');
})->name('ui-ux-design');
Route::get('/web-application', function () {
    return view('web-application');
})->name('web-application');
Route::get('/animation', function () {
    return view('animation');
})->name('animation');
Route::get('/content-writing', function () {
    return view('content-writing');
})->name('content-writing');

Route::get('/blockchain', function () {
    return view('blockchain');
})->name('blockchain');

Route::get('/mobile-application', function () {
    return view('mobile-application');
})->name('mobile-application');