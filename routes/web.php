<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PlanController;
use App\Http\Controllers\Site\LoginController;
use App\Http\Controllers\Site\ContatoController;
use App\Http\Controllers\Site\Treinamento\CalendarioController;
use App\Http\Controllers\Site\Treinamento\ListaTreinamentoController;

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

Route::get('/', function() {
    return view('welcome');
})->name('home');


Route::get('/contato', [ContatoController::class, 'contato'])->name('site.contato');
Route::post('/contato', [ContatoController::class, 'contato'])->name('site.contato');

Route::prefix('/admin')->group(function() {
    Route::get('/plans', [PlanController::class, 'index'])->name('admin.planos');
});

Route::prefix('/treinamento')->group(function() {
    Route::get('/calendario/{mes?}/{ano?}', [CalendarioController::class, 'index'])->name('site.treinamento.calendario');
    Route::get('/lista', [ListaTreinamentoController::class, 'index'])->name('site.treinamento.lista');
});

Route::get('/login', [LoginController::class, 'login'])->name('site.login');
Route::post('/logout', [LoginController::class, 'logout'])->name('site.logout');
Route::post('/login', [LoginController::class, 'auth'])->name('site.auth');
