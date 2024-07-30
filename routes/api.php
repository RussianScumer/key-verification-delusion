<?php

use App\Http\Controllers\KeyController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


#Route::get('/generate-key', [KeyController::class, 'generateKey']);
Route::post('/verify-key', [KeyController::class, 'verifyKey']);
