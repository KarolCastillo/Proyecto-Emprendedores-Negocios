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

//login

Route:: view('/','auth.login');

//Administrador
Route:: view('/usuario','auth.register');
Route::get( '/listarUsuario', [\App\Http\Controllers\UserController::class, 'usuario' ] )->name('customer.usuario');
// vista de inicio
Route::get( '/inicio', [\App\Http\Controllers\CustomerController::class, 'inicio' ] )->name('customer.inicio');
//clientes Customer
Route::get( '/listarCustomer', [\App\Http\Controllers\CustomerController::class, 'index' ] )->name('customer.index');
Route::get('/registrar',[\App\Http\Controllers\CustomerController::class, 'register'])->name('customer.register');
Route::get( '/editar-cliente', [\App\Http\Controllers\CustomerController::class, 'index' ] )->name('customer.index');
Route::get( '/modificar-cliente', [\App\Http\Controllers\CustomerController::class, 'ver' ])->name('customer.ver');
route::get("/guardar",[\App\Http\Controllers\CustomerController::class,'SaveCustomer'])->name("SaveCustomer");
route::get("/editar/{id}",[\App\Http\Controllers\CustomerController::class,'modificar'])->name('modificar');
route::get("/edita/{id}",[\App\Http\Controllers\CustomerController::class,'edit'])->name('edit');
route::delete("/delete/{id}",[\App\Http\Controllers\CustomerController::class,'delete'])->name('delete');

//proveedores Provider
Route::get('/Registrar-Pro',[\App\Http\Controllers\ProviderController::class, 'register'])->name('providers.register');
route::get("/Guardar-Pro",[\App\Http\Controllers\ProviderController::class,'SaveProvider'])->name("SaveProvider");
Route::get( '/listar', [\App\Http\Controllers\ProviderController::class, 'index' ] )->name('providers.index');

//Predio Parking
Route::get('/Parking',[\App\Http\Controllers\ParkingController::class, 'register'])->name('parking.register');
route::get("/Guardar-Parking",[\App\Http\Controllers\ParkingController::class,'save'])->name("save");
Route::get( '/listar-Predio', [\App\Http\Controllers\ParkingController::class, 'index' ] )->name('parking.index');




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
