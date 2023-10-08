<?php
use App\Http\Controllers\ReservaController;
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

Route::get('/',[App\Http\Controllers\PortafolioController::class, 'index']);

Auth::routes();

Route::resource('/lugares',App\Http\Controllers\LugareController::class);
Route::post('/reservar', [ReservaController::class, 'store'])->name('reservar.store');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
