<?php

use Illuminate\Support\Facades\Route;

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

Route::group(['namespace'=>'App\Http\Controllers\Main'], function() {
    Route::get('/', IndexController::class);
});

Route::group(['namespace' => 'App\Http\Controllers\Admin', 'prefix' => 'admin', 'middleware' => ['auth', 'admin', 'verified'] ], function (){
    Route::get('/', IndexController::class)->name('admin.main.index');
});

Route::group(['namespace'=>'App\Http\Controllers\Admin\Authors', 'prefix' => 'admin/authors'], function() {
    Route::get('/', IndexController::class)->name('admin.authors.index');
    Route::get('/create', CreateController::class)->name('admin.author.create');
    Route::post('/', StoreController::class)->name('admin.author.store');
    Route::get('/{author}', ShowController::class)->name('admin.author.show');
    Route::get('/{author}/edit', EditController::class)->name('admin.author.edit');
    Route::patch('/{author}', UpdateController::class)->name('admin.author.update');
    Route::delete('/{author}', DeleteController::class)->name('admin.author.delete');
});

Route::group(['namespace'=>'App\Http\Controllers\Admin\Books', 'prefix' => 'admin/books'], function() {
    Route::get('/', IndexController::class)->name('admin.books.index');;
    Route::get('/create', CreateController::class)->name('admin.book.create');
    Route::post('/', StoreController::class)->name('admin.book.store');
    Route::get('/{book}', ShowController::class)->name('admin.book.show');
    Route::get('/{book}/edit', EditController::class)->name('admin.book.edit');
    Route::patch('/{book}', UpdateController::class)->name('admin.book.update');
    Route::delete('/{book}', DeleteController::class)->name('admin.book.delete');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
