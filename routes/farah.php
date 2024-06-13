<?php

use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::post('contact/store', [ContactUsController::class, 'store'])->name('contact.send');


// profile user
Route::get('profile-user', [ProfileController::class, 'index'])->name('profile-user.user');