<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', [Controller::class, 'goToLogin']);
Route::post('/login/confirm', [AccountController::class, 'goToLogin']);
