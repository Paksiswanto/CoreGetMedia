<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\NewsCategoryController;
use App\Http\Controllers\NewsSubCategoryController;
use Illuminate\Support\Facades\Route;

Route::get('news/{slug}', [NewsCategoryController::class, 'index'])->name('news.category.user');
Route::get('news/subcategory/{slug}', [NewsSubCategoryController::class, 'index'])->name('news.subcategory');

Route::get('all-subcategory', [NewsSubCategoryController::class, 'all_subcategory'])->name('all-subcategory.user');   

Route::get('confirm-author-list', [AuthorController::class, 'index'])->name('confirm-author.admin');
