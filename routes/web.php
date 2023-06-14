<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('layouts/cliente/cliente');
});

Route::get('/sobrenos', function () {
    return view('layouts/cliente/sobrenos');
});

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('layouts/staff/pizzas');
    });
    Route::get('/staff/pedidos', function () {
        return view('layouts/staff/pedidos');
    });
});
