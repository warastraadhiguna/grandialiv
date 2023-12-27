<?php

use App\Http\Controllers\AdvantageController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\FacilityController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TypeController;

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

Route::prefix('/admin')->middleware(['auth'])->group(
    function () {
        Route::get('/dashboard', [DashboardController::class, "index"]);
        Route::get('/company', [CompanyController::class, "index"]);
        Route::put('/company/{id}', [CompanyController::class, "update"]);
        Route::resource('/banner', BannerController::class);
        Route::resource('/advantage', AdvantageController::class);
        Route::resource('/facility', FacilityController::class);
        Route::resource('/type', TypeController::class);

        Route::resource('/user', UserController::class)->middleware('checkRole:superadmin');
    }
);
