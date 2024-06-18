<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\imcController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [imcController::class, 'index']);

Route::get('/imc/caclularImc',[imcController::class, 'index']);