<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::patch('banned-user/{user}' , [UserController::class ,'banned']);

