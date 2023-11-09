<?php

use App\Http\Controllers\Admin\AuthLoginController;
use App\Http\Controllers\Admin\SupportController;
use App\Http\Controllers\AniversarianteController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});
