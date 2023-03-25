<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('categories', [App\Http\Controllers\CategoryController::class, 'index'])->name('categories');
Route::get('categories/new', [App\Http\Controllers\CategoryController::class, 'create'])->name('new-category');
Route::post('categories/store', [App\Http\Controllers\CategoryController::class, 'store'])->name('store-new-category');
Route::get('categories/delete/{id}', [App\Http\Controllers\CategoryController::class, 'destroy'])->name('delete-category');
Route::get('categories/view/{id}', [App\Http\Controllers\CategoryController::class, 'show'])->name('view-category');
Route::get('categories/edit/{id}', [App\Http\Controllers\CategoryController::class, 'edit'])->name('edit-category');
Route::post('categories/update/{id}', [App\Http\Controllers\CategoryController::class, 'update'])->name('update-category');
