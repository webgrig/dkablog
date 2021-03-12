<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/category/{slug?}', [SiteController::class, 'category'])->name('category');

Route::get('/article/{slug?}', [SiteController::class, 'article'])->name('article');

Route::get('/', function () {
    return view('index');
})->name('home');

Route::view('/jambatron', 'jambatron');
