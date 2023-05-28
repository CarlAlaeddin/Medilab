<?php

use App\Http\Controllers\Home\MedicalController;
use Illuminate\Support\Facades\Route;

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

// Route::post('/Appointment/store',[AppointmentController::class,'store'])->name('appointment.store');