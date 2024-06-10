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


// ----- ADMIN -----
Route::get('/dashboard', function () {
    return view('pages.admin.home.index');
    })->name('dashboard.admin');

Route::get('category-list', [CategoryController::class, 'index'])->name('category.list.admin');
Route::resource('category', CategoryController::class);

Route::get('subcategory-list', [SubCategoryController::class, 'index'])->name('subcategory.list.admin');

Route::get('faq-list', [FaqController::class, 'index'])->name('faq.list.admin');
Route::get('category-list', [CategoryController::class, 'index'])->name('category.list.admin');
Route::get('subcategory-list', [SubCategoryController::class, 'index'])->name('subcategory.list.admin');
Route::get('tag-list', [TagsController::class, 'index'])->name('tag.list.admin');

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
})->name(('advertisement-list.admin'));

Route::get('confirm-advertisement', function(){
    return view('pages.admin.advertisement.confirm-advertisement');
})->name('confirm-advertisement.admin');

Route::get('detail-advertisement', function(){
    return view('pages.admin.advertisement.detail-advertisement');
})->name('detail-advertisement.admin');

Route::get('about-getmedia', function(){
    return view('pages.admin.about.index');
})->name('about-getmedia.admin');

Route::get('inbox-admin', function(){
    return view('pages.admin.inbox.index');
})->name('inbox-list.admin');

Route::get('subscribe-list', function(){
    return view('pages.admin.subscribe.index');
})->name('subscribe-list.admin');

Route::get('news-list', function(){
    return view('pages.admin.news.news-list');
})->name('news-list.admin');

Route::get('confirm-news', function(){
    return view('pages.admin.news.confirm-news');
})->name('confirm-news.admin');

Route::get('detail-nes', function(){
    return view('pages.admin.news.detail-news');
})->name('detail-news.admin');

Route::get('news-premium', function(){
    return view('pages.admin.news_premium.index');
})->name('news-premium.admin');


// ----- USER -----
Route::get('news/category', function(){
    return view('pages.user.category.index');
})->name('news.category');

Route::get('news/subcategory', function () {
    return view('pages.user.subcategory.index');
})->name('news.subcategory');

Route::get('all-news', function(){
    return view('pages.user.all-news.index');
})->name('news.all-news');

Route::get('faq', function(){
    return view('pages.user.faq.index');
})->name('faq-list.user');

Route::get('profile-user', function(){
    return view('pages.user.profile.index');
})->name('profile-user.user');

Route::get('profile-update', function(){
    return view('pages.user.profile.update');
})->name('profile-update.user');

Route::get('coin', function(){
    return view('pages.user.coin.index');
})->name('s');

Route::get('exchange-coin', function(){
    return view('pages.user.coin.exchange-coin');
})->name('exchange-coin.user');

Route::get('history-coin', function(){
    return view('pages.user.coin.history');
})->name('history-coin.user');

Route::get('inbox-user', function(){
    return view('pages.user.inbox.index');
})->name('inbox-user.user');



// ----- AUTHOR -----