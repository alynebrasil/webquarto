<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ImovelController;
use App\Http\Controllers\ComentarioController;
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

Route::get('/usuarios', [UsuarioController::class, 'index'])->name('usuarios.index');
Route::get('/usuarios/create', [UsuarioController::class, 'create'])->name('usuarios.create');
Route::post('/usuarios', [UsuarioController::class, 'store'])->name('usuarios.store');
Route::get('/usuarios/{usuario}', [UsuarioController::class, 'show'])->name('usuarios.show');
Route::get('/usuarios/{usuario}/edit', [UsuarioController::class, 'edit'])->name('usuarios.edit');
Route::put('/usuarios/{usuario}', [UsuarioController::class, 'update'])->name('usuarios.update');
Route::delete('/usuarios/{usuario}', [UsuarioController::class, 'destroy'])->name('usuarios.destroy');



Route::get('/imoveis', [ImovelController::class, 'index'])->name('imoveis.index');
Route::get('/imoveis/create', [ImovelController::class, 'create'])->name('imoveis.create');
Route::post('/imoveis', [ImovelController::class, 'store'])->name('imoveis.store');
Route::get('/imoveis/{imovel}', [ImovelController::class, 'show'])->name('imoveis.show');
Route::get('/imoveis/{imovel}/edit', [ImovelController::class, 'edit'])->name('imoveis.edit');
Route::put('/imoveis/{imovel}', [ImovelController::class, 'update'])->name('imoveis.update');
Route::delete('/imoveis/{imovel}', [ImovelController::class, 'destroy'])->name('imoveis.destroy');

Route::post('/comentarios', [ComentarioController::class, 'store'])->name('comentarios.store');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
