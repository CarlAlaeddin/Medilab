<?php

use App\Http\Controllers\SettingController;
use Illuminate\Support\Facades\Route;

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

Route::prefix('/admin-panel')
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
    });
