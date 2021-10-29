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
    return view('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/index', [App\Http\Controllers\IndexController::class, 'index'])->name('principal');

Route::get('/contato', [App\Http\Controllers\ContatoController::class, 'contato'])->name('contato');

Route::get('/planos', [App\Http\Controllers\PlanosController::class, 'planos'])->name('planos');

Route::get('/overview', [App\Http\Controllers\OverviewController::class, 'overview'])->name('overview');

Route::get('/portfolio', [App\Http\Controllers\PortfolioController::class, 'portfolio'])->name('portfolio');

Route::get('/sobre', [App\Http\Controllers\SobreController::class, 'sobre'])->name('sobre');

Route::get('/reserva', [App\Http\Controllers\ReservaController::class, 'reserva'])->name('reserva');