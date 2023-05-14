<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EditorController;
use App\Http\Controllers\FerramentaController;
use App\Http\Controllers\ProjetoController;
use App\Http\Controllers\PromptController;
use App\Http\Controllers\InteligenciaController;
use App\Http\Controllers\WelcomeController;

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

Route::get('/editor', [EditorController::class, 'index'])->name('editor');
Route::get('/ferramenta', [FerramentaController::class, 'index'])->name('ferramenta');
Route::get('/ferramenta/show/{id}', [FerramentaController::class, 'show'])->name('ferramenta.show');

Route::get('/projeto', [ProjetoController::class, 'index'])->name('projeto');

Route::get('/prompt', [PromptController::class, 'index'])->name('prompt');
Route::get('/prompt/show/{id}', [PromptController::class, 'show'])->name('prompt.show');

Route::get('/inteligencia-artificial', [InteligenciaController::class, 'index'])->name('inteligencia');
Route::get('/inteligencia/show/{id}', [InteligenciaController::class, 'show'])->name('inteligencia.show');

Route::get('/', [WelcomeController::class, 'index'])->name('/');
Route::get('/inteligencia-home/show/{id}', [WelcomeController::class, 'ishow'])->name('ainteligencia.show');
Route::get('/prompt-home/show/{id}', [WelcomeController::class, 'pshow'])->name('aprompt.show');
