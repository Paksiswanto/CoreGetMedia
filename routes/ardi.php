<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\NewsCategoryController;
use App\Http\Controllers\NewsSubCategoryController;
use Illuminate\Support\Facades\Route;

Route::get('news/{slug}', [NewsCategoryController::class, 'index'])->name('news.category.user');
Route::get('news/subcategory/{slug}', [NewsSubCategoryController::class, 'index'])->name('news.subcategory');

Route::get('confirm-author-list', [AuthorController::class, 'index'])->name('confirm-author.admin');
Route::get('author-list', [AuthorController::class, 'list_author'])->name('author-list.admin');
