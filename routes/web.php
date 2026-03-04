<?php
use App\Http\Controllers\MarioController;
use App\Http\Controllers\PokemonController;
use App\Http\Controllers\ZeldaController;
use Illuminate\Support\Facades\Route;

Route::get('/mario', [MarioController::class, 'index'])->name('mario');
Route::get('/zelda', [ZeldaController::class, 'index'])->name('zelda');
Route::get('/pokemon', [PokemonController::class, 'index'])->name('pokemon');
Route::get('/', function () {
    return view('welcome');
});
