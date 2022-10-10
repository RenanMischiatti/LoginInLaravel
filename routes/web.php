<?php

use App\Http\Middleware\CheckAuth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DownloadController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogadoController;

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
Route::get('/cadastro', function () {
    return view('cadastro');
});
Route::post('/cadastrar', [LoginController::class, 'cadastro']);
Route::post('/autenticar', [LoginController::class, 'autenticar']);


Route::middleware('checkauth')->group(function () {

    Route::get('/logado', [LogadoController::class, 'index']);
    Route::get('/logout', [LogadoController::class, 'logout']);

});



Route::get('/download/{arquivo}', [DownloadController::class, 'download']);
