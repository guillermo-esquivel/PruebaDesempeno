<?php
use App\Http\Controllers\MarioController;
use App\Http\Controllers\PokemonController;
use App\Http\Controllers\ZeldaController;
use Illuminate\Support\Facades\Route;

Route::get('/mario', [MarioController::class, 'index']);
Route::get('/zelda', [ZeldaController::class, 'index']);
Route::get('/pokemon', [PokemonController::class, 'index']);
Route::get('/', function () {
    return view('welcome');
});
