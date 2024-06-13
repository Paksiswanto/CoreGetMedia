<?php

use App\Http\Controllers\ContactUsController;
use Illuminate\Support\Facades\Route;

Route::post('contact/store', [ContactUsController::class, 'store'])->name('contact.send');