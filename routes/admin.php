<?php

use App\Http\Controllers\Admin\DashBoardController;
use Illuminate\Support\Facades\Route;


Route::get('/', [DashBoardController::class, 'index'])->name('admin.index');
Route::resource('/category', CategoryController::class, ['as'=>'admin']);
Route::resource('/article', ArticleController::class, ['as'=>'admin']);

Route::group(['prefix' => 'user_management', 'namespace' => 'UserManagement'], function (){
    Route::resource('/user', UserController::class, ['as' => 'admin.user_management']);
});
