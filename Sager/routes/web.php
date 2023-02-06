<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/', [App\Http\Controllers\IndexController::class, 'index'])->name('home');

Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/{id}/edit', [ProductController::class, 'edit']);
Route::put('products/{product}', [ProductController::class, 'update'])->name('products.update');
Route::delete('products/{id}',  [ProductController::class, 'destroy'])->name('products.destroy');
Route::get('/products/create', [ProductController::class,'create'])->name('products.create');
Route::post('/products', [ProductController::class,'store'])->name('products.store');




Route::get('/Categorios', [CategoryController::class, 'index'])->name('Category.index');
Route::get('/Categorios/{id}/edit', [CategoryController::class, 'edit']);
Route::put('Categorios/{product}', [CategoryController::class, 'update'])->name('Category.update');
Route::delete('Categorios/{id}',  [CategoryController::class, 'destroy'])->name('Category.destroy');
Route::get('/Categorios/create', [CategoryController::class,'create'])->name('Category.create');
Route::post('/Categorios', [CategoryController::class,'store'])->name('Category.store');


Route::get('/Users', [UserController::class, 'index']);
