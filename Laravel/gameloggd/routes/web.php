<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Auth::routes();
//Hay que crear if en app.blade

Route::resource('juegos', App\Http\Controllers\JuegoController::class)->middleware('auth'); //middleware para que no salgan a no ser que estés logeado
Route::resource('generos', App\Http\Controllers\GeneroController::class)->middleware('auth');
Route::resource('plataformas', App\Http\Controllers\PlataformaController::class)->middleware('auth'); //middleware para que no salgan a no ser que estés logeado
Route::resource('estados', App\Http\Controllers\EstadoController::class)->middleware('auth');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
