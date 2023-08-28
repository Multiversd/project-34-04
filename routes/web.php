<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\TypeProductController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


//เมนูสินค้า
Route::get('admin/product/index',[ProductController::class, 'index'])->name('product.index');
Route::get('admin/product/create',[ProductController::class, 'create'])->name('product.create');

//เมนูประเภทสินค้า
Route::get('admin/typeproduct/index',[TypeProductController::class, 'index'])->name('typeproduct.index');
Route::get('admin/typeproduct/create',[TypeProductController::class, 'create'])->name('typeproduct.create');
