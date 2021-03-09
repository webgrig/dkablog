<?php

use App\Http\Controllers\Admin\DashBoardController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashBoardController::class, 'index'])->name('admin.index');
Route::resource('/category', 'CategoryController', ['as'=>'admin']);
Route::resource('/article', 'ArticleController', ['as'=>'admin']);

