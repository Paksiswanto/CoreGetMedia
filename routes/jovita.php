<?php
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\NewsCategoryController;
use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;

Route::get('news/category', function(){
    return view('pages.user.category.index');
})->name('news.category');

Route::get('{category}', [NewsCategoryController::class, 'index'])->name('categories.show.user');

Route::get('{news}', [NewsController::class, 'show'])->name('news.singlepost');