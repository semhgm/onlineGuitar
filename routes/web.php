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
    return view('welcome');
})->name('welcome');
Route::get('/index', function () {
    return view('front.index');
})->name('index');
Route::get('/about', function () {
    return view('front.about');
})->name('about');
Route::get('/services', function () {
    return view('front.services');
})->name('services');
Route::get('/blog', function () {
    return view('front.blog');
})->name('blog');
Route::get('/courses', function () {
    return view('front.courses');
})->name('courses');
Route::get('/contact', function () {
    return view('front.contact');
})->name('contact');
