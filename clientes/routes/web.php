<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientesController;

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
    return view('clientes.create');
});

Route::get('clientes/create', [ClientesController::class, 'create'])->name('clientes.create');
Route::get('clientes/index', [ClientesController::class, 'index'])->name('clientes.index');
Route::post('clientes/store', [ClientesController::class, 'store'])->name('clientes.store');

Route::get('clientes/edit/{clientes}', [ClientesController::class, 'edit'])->name('clientes.edit');
Route::put('clientes/update/{clientes}', [ClientesController::class, 'update'])->name('clientes.update');
Route::delete('clientes/destroy/{clientes}', [ClientesController::class, 'destroy'])->name('clientes.destroy');