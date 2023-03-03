<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;

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

Route::get('shops/index', [ShopController::class, 'index'])->name('shops.index');
Route::get('shops/create', [ShopController::class, 'create'])->name('shops.create');
Route::get('shops/{id}/edit', [ShopController::class, 'edit'])->name('shops.edit');
Route::get('shops/delete/{id}', [ShopController::class, 'delete'])->name('shops.delete');
Route::get('shops/{id}/info', [ShopController::class, 'showShop'])->name('shops.showShop');
Route::put('shops/{id}', [ShopController::class, 'update'])->name('shops.update');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('shops', ShopController::class);
