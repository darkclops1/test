<?php

use App\Http\Controllers\CastController;

Route::get('/cast/create', [CastController::class, 'create'])->name('cast.create'); 
Route::post('/cast', [CastController::class, 'store'])->name('cast.store'); 
Route::get('/cast/{cast_id}', [CastController::class, 'show'])->name('cast.show'); 
Route::get('/cast/{cast_id}/edit', [CastController::class, 'edit'])->name('cast.edit'); 
Route::put('/cast/{cast_id}', [CastController::class, 'update'])->name('cast.update');
Route::delete('/cast/{cast_id}', [CastController::class, 'destroy'])->name('cast.destroy');

