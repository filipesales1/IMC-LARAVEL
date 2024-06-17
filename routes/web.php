<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\imcController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/imc',[imcController::class, 'index']);