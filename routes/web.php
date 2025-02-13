<?php

use App\Http\Controllers\AdminBlogController;
use App\Http\Controllers\AdminContactController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AdminPageController;
use App\Http\Controllers\AdminServiceController;
use App\Http\Controllers\PageController;
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

//sayfalara yönlendiriyor
Route::get('/', [PageController::class, 'index'])->name('index');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/blog', [PageController::class, 'blog'])->name('blog');
Route::get('/courses', [PageController::class, 'courses'])->name('courses');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

//admin sayfalarına yönlendiriyor
Route::prefix('admin')->group(function () {
    Route::get('/', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/app', [AdminPageController::class, 'index'])->name('admin.app');
    Route::get('/about', [AdminPageController::class, 'about'])->name('admin.about');
    Route::get('/services', [AdminServiceController::class, 'services'])->name('admin.services');
    Route::get('/blog', [AdminBlogController::class, 'blog'])->name('admin.blog');
    Route::get('/contact', [AdminContactController::class, 'contact'])->name('admin.contact');
    // Page işlemleri
    Route::get('/pages/app', [AdminPageController::class, 'index'])->name('admin.pages.index');
    Route::get('/pages/{id}/edit', [AdminPageController::class, 'edit'])->name('admin.pages.edit'); // POST yerine GET
    Route::put('/pages/update/{id}', [AdminPageController::class, 'update'])->name('admin.pages.update'); // Update Metodu





});
