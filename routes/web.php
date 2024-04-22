<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SongController;

Route::get('/', function(){
    return view('welcome');
});

//ROTTA CREATE:
Route::get('/songs/create',[SongController::class, 'create'])->name('songs.create');
Route::post('/songs.store', [SongController::class,'store'])->name('songs.store');

//LETTURA DATI: INDEX E SHOW!
Route::get('/songs/index', [SongController::class,'index'])->name('songs.index');
Route::get('/songs/{song}/detail', [SongController::class,'show'])->name('songs.show');

//FUNZIONE DI EDIT E DI UPDATE: 
Route::get('/songs/{song}/edit', [SongController::class,'edit'])->name('songs.edit');
Route::put('/songs/{song}/update', [SongController::class,'update'])->name('songs.update');

//DESTROY: 
Route::delete('/songs/{song}/destroy', [SongController::class,'destroy'])->name('songs.destroy');

// Route::get('/forgot_password', [SongController::class,'forgot_password'])->name('forgot-password');
// Route::post('/forgott_password', [SongController::class, 'forgott_password'])->name('forgott-password');