<?php

use App\Http\Controllers\OperationsOfProductController;
use App\Http\Controllers\ReadProductController;
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

Route::get('product',[ReadProductController::class,'index'])->name('product.index');
Route::get('product/create',[OperationsOfProductController::class,'create'])->name('product.create');
Route::post('product/store',[OperationsOfProductController::class,'store'])->name('product.store');
Route::get('product/edit/{id}',[OperationsOfProductController::class,'edit'])->name('product.edit');
Route::post('product/update/{id}',[OperationsOfProductController::class,'update'])->name('product.update');
Route::post('product/destroy/{id}',[OperationsOfProductController::class,'destroy'])->name('product.destroy');


