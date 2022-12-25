<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Backend\ProductController;
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
Route::get('/', function () {
    return view('welcome');
});

Route::get('/frontend', function () {
    return view('frontend.home.index');
});

Route::get('/back', function () {
    return view('backend.home.index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// For backend route
Route::get('/create',[ProductController::class,'index']);
Route::post('/addproduct',[ProductController::class,'insert'])->name('product.addproduct');
Route::get('/show',[ProductController::class,'show'])->name('product.show');
Route::get('/edit/{id}',[ProductController::class,'edit'])->name('product.edit');
Route::post('/update/{id}',[ProductController::class,'update'])->name('product.update');
Route::get('/delete/{id}',[ProductController::class,'delete'])->name('product.delete');
require __DIR__.'/auth.php';
