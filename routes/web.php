<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FacilityController;
use App\Http\Controllers\AdvantageController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GalleryController;

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

Route::get('/login', [AuthController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'doLogin'])->middleware('guest');
Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth');
Route::get('/', [HomeController::class, "index"]);
Route::get('/about', [HomeController::class, "about"]);

Route::get('/type/{category:slug}', [HomeController::class, "showType"]);
Route::get('/blog/{blog:slug}', [HomeController::class, "showBlog"]);
Route::get('/blog', [HomeController::class, "blog"]);
Route::get('/contact', [HomeController::class, "contact"]);
Route::get('/gallery', [HomeController::class, "gallery"]);

Route::prefix('/admin')->middleware(['auth'])->group(
    function () {
        Route::get('/dashboard', [DashboardController::class, "index"]);
        Route::get('/company', [CompanyController::class, "index"]);
        Route::get('/about', [CompanyController::class, "about"]);

        Route::put('/company/{id}', [CompanyController::class, "update"]);
        Route::put('/about/{id}', [CompanyController::class, "updateAbout"]);

        Route::put('/company-facility/{id}', [CompanyController::class, "facilityUpdate"]);
        Route::put('/company-type/{id}', [CompanyController::class, "typeUpdate"]);

        Route::resource('/blog', BlogController::class);

        Route::resource('/banner', BannerController::class);
        Route::resource('/gallery', GalleryController::class);

        Route::resource('/advantage', AdvantageController::class);
        Route::resource('/facility', FacilityController::class);
        Route::resource('/type', TypeController::class);
        Route::resource('/category', CategoryController::class);

        Route::resource('/user', UserController::class)->middleware('checkRole:superadmin');
    }
);