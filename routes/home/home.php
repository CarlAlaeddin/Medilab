<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home\ContactController;
use App\Http\Controllers\Home\MedicalController;
use App\Http\Controllers\Home\AppointmentController;

/*
|--------------------------------------------------------------------------
| Web Routes Home
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/',[MedicalController::class, 'index'])->name('index');

Route::post('/appointment/store',[AppointmentController::class,'store'])->name('appointment.store');
Route::post('/contact/store',[ContactController::class,'store'])->name('contact.store');