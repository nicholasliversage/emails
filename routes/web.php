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

Route::get('/vantagens-contaPro', function () {
    return view('emails.campanha.vantagensPro');
});

Route::get('/contaPro', function () {
    return view('emails.campanha.contaPro');
});

Route::get('/confirmarConta', function () {
    return view('emails.campanha.confirmarConta');
});

Route::get('/redefinirSenha', function () {
    return view('emails.campanha.redefinirSenha');
});

Route::get('/explicadoresAdmitidos', function () {
    return view('emails.campanha.explicadoresAdmintidos');
});

Route::get('/contaNaoActiva', function () {
    return view('emails.campanha.contaNaoActiva');
});

Route::get('/explicadoresProSemana', function () {
    return view('emails.campanha.explicadoresProSemana');
});
//Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
