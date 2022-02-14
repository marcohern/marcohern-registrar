<?php

use Illuminate\Support\Facades\Route;
use Marcohern\Registrar\Http\RegistrarController;

Route::view('registrarx','registrar::register_form');
Route::get('registrar', [Marcohern\Registrar\Http\Controllers\RegistrarController::class, 'form']);