<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('pages.index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/category', function(){
    return view('pages.users.category.index');
});

Route::get('subcategory', function () {
    return view('pages.users.subcategory.index');
});

Route::get('/dashboard', function () {
    return view('pages.admin.home.index');
})->name('dashboard.admin');

Route::get('faq-list', [FaqController::class, 'index'])->name('faq.list.admin');

Route::get('tag-list', [TagController::class, 'index'])->name('tag.list.admin');

Route::get('category-list', [CategoryController::class, 'index'])->name('category.list.admin');

Route::get('subcategory-list', [SubCategoryController::class, 'index'])->name('subcategory.list.admin');