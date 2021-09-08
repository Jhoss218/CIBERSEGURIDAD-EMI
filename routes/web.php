<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InscripcionController;

Route::get('/', InscripcionController::class);
Route::get('inscripcion', [InscripcionController::class, 'create'])->name('inscripcion.create');
Route::post('form', [InscripcionController::class, 'storeKardex']) ->name('form.storeKardex');
