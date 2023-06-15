<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PizzaController;
use App\Http\Controllers\PedidosController;

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

Route::get('/cliente/sobrenos', function () {
    return view('layouts/cliente/sobrenos');
});

Route::get('/cliente/cardapio', [PizzaController::class, 'getPizzasCardapio']);

Route::get('/cliente/pedido', function () {
    return view('layouts/cliente/pedido');
});
Route::post('/cliente/salvaNovoPedido', [PedidosController::class, 'postSalvaNovo']);

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {
    Route::get('/dashboard', [PizzaController::class, 'getPizzas']);

    Route::get('/staff/novaPizza', function () {
        return view('layouts/staff/novaPizza');
    });
    Route::post('/staff/salvaNovaPizza', [PizzaController::class, 'postSalvaNovo']);

    Route::get('/staff/alteraPizza/{id}', [PizzaController::class, 'getPizza']);

    Route::post('/staff/atualizaPizza', [PizzaController::class, 'postAtualizaPizza']);

    Route::get('/staff/excluirPizza/{id}', [PizzaController::class, 'excluirPizza']);
    
    Route::get('/staff/pedidos', [PedidosController::class, 'getPedidos']);

    Route::get('/staff/pedidosEnviados', [PedidosController::class, 'getPedidosEnviados']);

    Route::get('/staff/enviaPedido/{id}', [PedidosController::class, 'postAtualizaStatusPed']);
});
