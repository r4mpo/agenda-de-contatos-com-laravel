<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContatosController;

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

Route::get('/', [ContatosController::class, 'index']);
Route::get('/contatos/insert', [ContatosController::class, 'insert']);
Route::post('/contatos/store', [ContatosController::class, 'store']);
Route::delete('/contatos/delete/{id}', [ContatosController::class, 'delete']);
Route::get('/contatos/edit/{id}', [ContatosController::class, 'edit']);
Route::put('/contatos/update', [ContatosController::class, 'update']);