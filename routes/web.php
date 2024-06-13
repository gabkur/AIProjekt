<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\DentistController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('patients', PatientController::class)->middleware('auth');
Route::resource('appointments', AppointmentController::class)->middleware('auth');

Route::get('dentists', [DentistController::class, 'index'])->name('dentists.index');
Route::get('services', [ServiceController::class, 'index'])->name('services.index');

Route::middleware(['auth'])->group(function () {
    Route::get('dentists/create', [DentistController::class, 'create'])->name('dentists.create');
    Route::post('dentists', [DentistController::class, 'store'])->name('dentists.store');
    Route::get('dentists/{dentist}/edit', [DentistController::class, 'edit'])->name('dentists.edit');
    Route::put('dentists/{dentist}', [DentistController::class, 'update'])->name('dentists.update');
    Route::delete('dentists/{dentist}', [DentistController::class, 'destroy'])->name('dentists.destroy');

    Route::get('services/create', [ServiceController::class, 'create'])->name('services.create');
    Route::post('services', [ServiceController::class, 'store'])->name('services.store');
    Route::get('services/{service}/edit', [ServiceController::class, 'edit'])->name('services.edit');
    Route::put('services/{service}', [ServiceController::class, 'update'])->name('services.update');
    Route::delete('services/{service}', [ServiceController::class, 'destroy'])->name('services.destroy');
});

Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login'])->name('login.post');
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

Route::get('admin', function () {
    return redirect('/');
})->middleware('auth')->name('admin');
