<?php

use App\Http\Controllers\Admin\AuthLoginController;
use App\Http\Controllers\Admin\SupportController;
use App\Http\Controllers\AniversarianteController;
use Illuminate\Support\Facades\Route;

Route::get('/supports', [SupportController::class, 'index'])->name('supports.index');

Route::get('/login', [AuthLoginController::class, 'index'])->name('login.index');

Route::get('/aniversariantes', [AniversarianteController::class, 'index'])->name('aniversariantes.index');

Route::get('/', function () {
    return view('welcome');
});
