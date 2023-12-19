<?php

use App\Http\Controllers\BezerroController;
use App\Http\Controllers\Cms\Dashboard;
use App\Http\Controllers\LoteBezerrosController;
use App\Http\Controllers\LotesController;
use App\Http\Controllers\PesoBezerroController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TouroController;
use App\Http\Controllers\VacaController;
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


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('dashboard', Dashboard::class);
    Route::resource('vaca', VacaController::class);
    Route::resource('bezerro', BezerroController::class);
    Route::resource('touro', TouroController::class);
    Route::resource('peso-bezerro', PesoBezerroController::class);
    Route::resource('lotes', LotesController::class);
    Route::resource('lote-bezerro', LoteBezerrosController::class);
    Route::get('/atualizar-lista', [LoteBezerrosController::class, 'getBezerrosJson']);
});

require __DIR__.'/auth.php';
