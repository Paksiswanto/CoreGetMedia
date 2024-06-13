<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\NewsCategoryController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\NewsSubCategoryController;
use Illuminate\Support\Facades\Route;

Route::get('news/{slug}', [NewsCategoryController::class, 'index'])->name('news.category.user');
Route::get('news/subcategory/{slug}', [NewsSubCategoryController::class, 'index'])->name('news.subcategory');

Route::get('confirm-author-list', [AuthorController::class, 'index'])->name('confirm-author.admin');
Route::get('author-list', [AuthorController::class, 'list_author'])->name('author-list.admin');

Route::post('comment-create/{news}', [CommentController::class, 'store'])->name('comment.create');
Route::post('reply-comment-create/{news}/{comment}', [CommentController::class, 'reply'])->name('reply.create');

Route::put('update-comment/{comment}', [CommentController::class, 'update'])->name('update.comment');
Route::delete('delete-comment/{comment}', [CommentController::class, 'destor'])->name('delete.comment');

Route::put('pin-news/{news}', [NewsController::class, 'pin_news'])->name('pin.news.admin');
Route::put('unpin-news/{news}', [NewsController::class, 'unpin_news'])->name('unpin.news.admin');
