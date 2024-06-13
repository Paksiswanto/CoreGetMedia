<?php
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\NewsCategoryController;
use App\Http\Controllers\NewsSubCategoryController;
use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;

Route::get('news/category', function(){
    return view('pages.user.category.index');
})->name('news.category');

Route::get('{category}', [NewsCategoryController::class, 'index'])->name('categories.show.user');

Route::get('news/{news}', [NewsController::class, 'show'])->name('news.singlepost');

Route::get('detail-author', function(){
    return view('pages.user.author.detail-author');
})->name('detail-author.user');

Route::get('all-category/{category}', [NewsCategoryController::class, 'showAll'])->name('all-category-list.user');

Route::get('all-subcategory/{subcategory}', [NewsSubCategoryController::class, 'showAll'])->name('all-subcategory-list.user');
