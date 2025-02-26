<?php

use App\Http\Controllers\AdminBlogController;
use App\Http\Controllers\AdminContactController;
use App\Http\Controllers\AdminCoursesController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AdminPageController;
use App\Http\Controllers\AdminServiceController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\AuthController;

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
Route::get('/blog/{id}', [PageController::class, 'blogDetail'])->name('blog.detail');
Route::get('/courses', [PageController::class, 'courses'])->name('courses');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
route::post('/contact/send',[adminContactController::class,'sendMail'])->name('contact.send');


Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');

//admin sayfalarına yönlendiriyor
Route::middleware(['auth'])->prefix('admin')->group(function () {

      //  Route::get('/login', [AuthController::class, 'admin'])->name('admin');
        Route::get('/', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
        Route::get('/app', [AdminPageController::class, 'index'])->name('admin.app');
        Route::get('/about', [AdminPageController::class, 'about'])->name('admin.about');
        Route::get('/services', [AdminServiceController::class, 'services'])->name('admin.services');
        Route::get('/blog', [AdminBlogController::class, 'blog'])->name('admin.blog');
        Route::get('/courses', [AdminCoursesController::class, 'index'])->name('admin.courses');
        Route::get('/contact', [AdminContactController::class, 'contact'])->name('admin.contact');
        // Page işlemleri


        //bu kısım sayfalardaki yazıları yönettiğimiz admin sayfaları için
        Route::get('/pages/app', [AdminPageController::class, 'index'])->name('admin.pages.index');
        Route::get('/pages/{id}/edit', [AdminPageController::class, 'edit'])->name('admin.pages.edit'); // POST yerine GET
        Route::put('/pages/update/{id}', [AdminPageController::class, 'update'])->name('admin.pages.update'); // Update Metodu
        //bu kısım ise services sayfasına hizmetleri eklediğimiz kartları yönetiyor.


        Route::post('/services', [AdminServiceController::class, 'store'])->name('admin.services.store');
        Route::get('/services/edit/{id}', [AdminServiceController::class, 'edit'])->name('services.edit');
        Route::put('/services/update/{id}', [AdminServiceController::class, 'update'])->name('services.update');
        Route::delete('/services/delete/{id}', [AdminServiceController::class, 'destroy'])->name('services.destroy');



        // bu kısım blog tarafını yönetiyor
        Route::get('/blog', [AdminBlogController::class, 'blog'])->name('admin.blog');
        Route::post('/blog/store', [AdminBlogController::class, 'store'])->name('admin.blog.store');
        Route::delete('/blog/destroy/{id}', [AdminBlogController::class, 'destroy'])->name('admin.blog.destroy');
        Route::get('/blog/edit/{id}', [AdminBlogController::class, 'edit'])->name('admin.blog.edit');
        Route::put('/blog/update/{id}', [AdminBlogController::class, 'update'])->name('admin.blog.update');




        // bu kısım dersleri yönetiyor
        Route::post('/courses/store', [AdminCoursesController::class, 'store'])->name('admin.courses.store');
        Route::delete('/courses/destroy/{id}', [AdminCoursesController::class, 'destroy'])->name('admin.courses.destroy');
        Route::get('/courses/edit/{id}', [AdminCoursesController::class, 'edit'])->name('admin.courses.edit');
        Route::put('/courses/update/{id}', [AdminCoursesController::class, 'update'])->name('admin.courses.update');



        // login page'e yönlendiriyor
        Route::post('/logout', [AuthController::class, 'logout'])->name('logout');



        //kullanıcı ayarları
        Route::get('/settings', [AdminUserController::class, 'settings'])->name('admin.settings');
        Route::post('/user/settings', [AdminUserController::class, 'profile'])->name('admin.user.profile');
        Route::get('/user/settings/edit/{id}', [AdminUserController::class, 'edit'])->name('admin.user.edit');
        Route::put('/user/settings/update/{id}', [AdminUserController::class, 'update'])->name('admin.user.update');
        Route::delete('/user/settings/destroy/{id}', [AdminUserController::class, 'destroy'])->name('admin.user.destroy');


    Route::put('/settings/update', [AdminDashboardController::class, 'update'])->name('admin.settings.update');
});





