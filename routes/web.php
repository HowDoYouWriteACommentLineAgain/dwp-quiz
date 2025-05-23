<?php

use App\Http\Controllers\GamesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/get-csrf-token', function () {
    return response()->json(['_token' => csrf_token()]);
});
Route::get('/games', [GamesController::class, 'index'])->name('games.index');
Route::get('/games/create', [GamesController::class, 'create'])->name('games.create');
Route::post('/games', [GamesController::class, 'store'])->name('games.store');
Route::get('/games/{id}', [GamesController::class, 'show'])->name('games.show');
Route::get('/games/{id}/edit', [GamesController::class, 'edit'])->name('games.edit');
Route::put('/games/{id}', [GamesController::class, 'update'])->name('games.update');
Route::delete('/games/{id}', [GamesController::class, 'destroy'])->name('games.destroy');


// Step 2. make the routes for the rest of the actions