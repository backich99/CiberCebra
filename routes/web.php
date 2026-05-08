<?php

use App\Http\Controllers\DoctorController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DoctorController::class, 'index'])->name('doctors.index');
Route::get('/doctores/{doctor}', [DoctorController::class, 'show'])->name('doctors.show');
