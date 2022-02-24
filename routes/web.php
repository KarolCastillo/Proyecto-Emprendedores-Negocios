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

Route::get('/', function () {
    return view('welcome');
});

Route::get( '/listar', [\App\Http\Controllers\CustomerController::class, 'index' ] )->name('customer.index');
Route::get('/registrar',[\App\Http\Controllers\CustomerController::class, 'register'])->name('customer.register');
Route::get( '/editar-cliente', [\App\Http\Controllers\CustomerController::class, 'index' ] )->name('customer.index');
Route::get( '/modificar-cliente', [\App\Http\Controllers\CustomerController::class, 'ver' ])->name('customer.ver');
route::get("/guardar",[\App\Http\Controllers\CustomerController::class,'save'])->name("save");
route::get("/editar/{id}",[\App\Http\Controllers\CustomerController::class,'modificar'])->name('modificar');
route::get("/edita/{id}",[\App\Http\Controllers\CustomerController::class,'edit'])->name('edit');
route::delete("/delete/{id}",[\App\Http\Controllers\CustomerController::class,'delete'])->name('delete');
