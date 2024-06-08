<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\TagsController;
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

Route::get('/dashboard', function () {
    return view('pages.admin.home.index');
    })->name('dashboard.admin');
    
    Route::get('faq-list', [FaqController::class, 'index'])->name('faq.list.admin');
    
    Route::get('tag-list', [TagsController::class, 'index'])->name('tag.list.admin');
    
    Route::get('category-list', [CategoryController::class, 'index'])->name('category.list.admin');
    
Route::get('subcategory-list', [SubCategoryController::class, 'index'])->name('subcategory.list.admin');

Route::get('voucher-list', function(){
    return view('pages.admin.voucher.index');
    })->name('voucher.list.admin');

    Route::get('admin-account-list', function(){
        return view('pages.admin.account.admin');
})->name('admin-account.list.admin');

Route::get('author-list', function(){
    return view('pages.admin.author.author-list');
})->name('author-list.admin');

Route::get('author-banned', function(){ 
    return view('pages.admin.author.author-banned');
    })->name('author-banned.admin');
    
    Route::get('confirm-author-list', function(){
    return view('pages.admin.author.confirm-author');
})->name('confirm-author.admin');

Route::get('user-account-list', function(){
    return view('pages.admin.account.user');
})->name('user-account.list.admin');

Route::get('admin-account-list', function(){
    return view('pages.admin.account.admin');
})->name('admin-account.list.admin');

Route::get('singlepost/news', function(){
    return view('pages.user.singlepost.index');
})->name('singlepost.news');

Route::get('advertisement-list', function(){
    return view('pages.admin.advertisement.advertisement-list');
})->name(('advertisement-list.admin'))

Route::get('confirm-advertisement', function(){
    return view('pages.admin.advertisement.confirm-advertisement');
})->name('confirm-advertisement.admin');

Route::get('detail-', function(){
    return view('pages.admin.advertisement.detail-advertisement');
})->name('detail-advertisement.admin');

// user

Route::get('news/category', function(){
    return view('pages.user.category.index');
})->name('news.category');

Route::get('news/subcategory', function () {
    return view('pages.user.subcategory.index');
})->name('news.subcategory');

Route::get('all-news', function(){
    return view('pages.user.all-news.index');
})->name(news.all-news);