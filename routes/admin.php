<?php

use App\Http\Controllers\Admin\DashBoardController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashBoardController::class, 'index'])->name('admin.index');
Route::get('/materials', [DashBoardController::class, 'materials'])->name('admin.materials');
Route::get('/categories', [DashBoardController::class, 'categories'])->name('admin.categories');
