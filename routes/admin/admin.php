<?php

use App\Http\Controllers\Admin\AppointmentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\WhyUsController;
use App\Http\Controllers\Admin\DoctorController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\WhyChooseController;
use App\Http\Controllers\Admin\DepartmentController;
use App\Http\Controllers\Admin\PositionDoctorController;

/*
|--------------------------------------------------------------------------
| Web Routes Admin
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::prefix('/admin-panel/management')
    ->name('admin.')
    ->group(function () {
        #________ This root belongs to the settings site
        Route::prefix('/settings')
            ->name('setting.')
            ->controller(SettingController::class)
            ->group(function () {
                Route::get('/', 'index')->name('index');
                Route::get('/edit', 'edit')->name('edit');
                Route::put('/update/{setting}', 'update')->name('update');
            });
        #________ This root belongs to the why us model
        Route::prefix('/why-us')
            ->name('whyUs.')
            ->controller(WhyUsController::class)
            ->group(function () {
                Route::get('/', 'index')->name('index');
                Route::get('/create', 'create')->name('create');
                Route::post('/store', 'store')->name('store');
                Route::get('/show/{whyUs}', 'show')->name('show');
                Route::get('/edit/{whyUs}', 'edit')->name('edit');
                Route::put('/update/{whyUs}', 'update')->name('update');
                Route::delete('/destroy/{whyUs}', 'destroy')->name('destroy');
            });
        #________ This root belongs to the why choose model
        Route::prefix('/why-choose')
            ->name('whyChoose.')
            ->controller(WhyChooseController::class)
            ->group(function () {
                Route::get('/', 'index')->name('index');
                Route::get('/create', 'create')->name('create');
                Route::post('/store', 'store')->name('store');
                Route::get('/show/{whyChoose}', 'show')->name('show');
                Route::get('/edit/{whyChoose}', 'edit')->name('edit');
                Route::put('/update/{whyChoose}', 'update')->name('update');
                Route::delete('/destroy/{whyChoose}', 'destroy')->name('destroy');
            });
        #________ This root belongs to the why choose model
        Route::prefix('/service')
            ->name('service.')
            ->controller(ServiceController::class)
            ->group(function () {
                Route::get('/', 'index')->name('index');
                Route::get('/create', 'create')->name('create');
                Route::post('/store', 'store')->name('store');
                Route::get('/show/{service}', 'show')->name('show');
                Route::get('/edit/{service}', 'edit')->name('edit');
                Route::put('/update/{service}', 'update')->name('update');
                Route::delete('/destroy/{service}', 'destroy')->name('destroy');
            });
        #________ This root belongs to the department model
        Route::prefix('/department')
            ->name('department.')
            ->controller(DepartmentController::class)
            ->group(function () {
                Route::get('/', 'index')->name('index');
                Route::get('/create', 'create')->name('create');
                Route::post('/store', 'store')->name('store');
                Route::get('/show/{department}', 'show')->name('show');
                Route::get('/edit/{department}', 'edit')->name('edit');
                Route::put('/update/{department}', 'update')->name('update');
                Route::delete('/destroy/{department}', 'destroy')->name('destroy');
            });

        #________ This root belongs to the department model
        Route::prefix('/doctor')
            ->name('doctor.')
            ->controller(DoctorController::class)
            ->group(function () {
                Route::get('/', 'index')->name('index');
                Route::get('/create', 'create')->name('create');
                Route::post('/store', 'store')->name('store');
                Route::get('/show/{doctor}', 'show')->name('show');
                Route::get('/edit/{doctor}', 'edit')->name('edit');
                Route::put('/update/{doctor}', 'update')->name('update');
                Route::delete('/destroy/{doctor}', 'destroy')->name('destroy');
            });

        #________ This root belongs to the department model
        Route::prefix('/position-doctor')
            ->name('position.')
            ->controller(PositionDoctorController::class)
            ->group(function () {
                Route::get('/', 'index')->name('index');
                Route::get('/create', 'create')->name('create');
                Route::post('/store', 'store')->name('store');
                Route::get('/show/{positionDoctor}', 'show')->name('show');
                Route::get('/edit/{positionDoctor}', 'edit')->name('edit');
                Route::put('/update/{positionDoctor}', 'update')->name('update');
                Route::delete('/destroy/{positionDoctor}', 'destroy')->name('destroy');
            });
        #________ This root belongs to the department model
        Route::prefix('/appointment')
            ->name('appointment.')
            ->controller(AppointmentController::class)
            ->group(function () {
                Route::get('/', 'index')->name('index');
                Route::get('/create', 'create')->name('create');
                Route::get('/show/{appointment}', 'show')->name('show');
                Route::get('/is_active/{appointment}', 'is_active')->name('is_active');
                Route::delete('/destroy/{appointment}', 'destroy')->name('destroy');
            });
    });
