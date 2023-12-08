<?php

use Illuminate\Support\Facades\Route;
// ******************************************************************TOUR START

use App\Http\Controllers\Admin\Auth\AuthController;
use App\Http\Controllers\Admin\Auth\CourierAuthController;
use App\Http\Controllers\Admin\Auth\ProfileController;
use App\Http\Controllers\Admin\Auth\UserController;
use App\Http\Controllers\Admin\CourierController;
use App\Http\Controllers\Admin\ParcelController;


Route::get('/login', [AuthController::class, 'login'])->name('login'); 
Route::post('validate_login', [AuthController::class, 'validate_login'])->name('admin-validate_login');

Route::get('/login_courier', [CourierAuthController::class, 'login'])->name('login_courier'); 
Route::post('/courier_validate_login', [CourierAuthController::class, 'validate_login'])->name('courier-validate_login');


Route::middleware(['auth:web,courier'])->group(function () {

    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/profile', [ProfileController::class, 'profile'])->name('admin-profile');
    Route::get('/profile_update', [ProfileController::class, 'profile_update'])->name('admin-profile-update');
    Route::put('/profile_update/{id}', [ProfileController::class, 'validate_profile_update'])->name('admin-profile-update-save');

    Route::get('/', [AuthController::class, 'backend'])->name('backend');

    Route::resource('user', UserController::class,['names' => 'user']);

    Route::resource('courier', CourierController::class,['names' => 'courier']);
    Route::resource('parcel', ParcelController::class,['names' => 'parcel']);

    
});












