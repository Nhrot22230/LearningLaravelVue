<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CiudadController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\CuentaController;

// Rutas para los recursos Ciudad
Route::resource('ciudades', CiudadController::class);

// Rutas para los recursos Rol
Route::resource('roles', RolController::class);

// Rutas para los recursos Usuario
Route::resource('usuarios', UsuarioController::class);

// Rutas para los recursos Cuenta
Route::resource('cuentas', CuentaController::class);

// Ruta para la página de inicio
Route::get('/', function () {
    return view('welcome');
});