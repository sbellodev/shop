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

Route::prefix('shops')->group(function () {
    Route::get('/', [ShopController::class, 'index'])->name('shops.index');
    Route::get('/createview', [ShopController::class, 'create'])->name('shops.create');
    Route::post('/create', [ShopController::class, 'store'])->name('shops.store');
    Route::get('/delete/{id}', [ShopController::class, 'delete'])->name('shops.delete');
});

Route::resource('shops', ShopController::class);

// 
