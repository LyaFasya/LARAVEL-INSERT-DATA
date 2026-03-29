<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [MahasiswaController::class, 'index']);
Route::post('/store', [MahasiswaController::class, 'store']);
