<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pedidos;

class PedidosController extends Controller
{
    public function postSalvaNovo(Request $request){
        $pedidos = new Pedidos;
        $pedidos->nome = $request->input('nome');
        $pedidos->endereco = $request->input('endereco');
        $pedidos->pedido = $request->input('pedido');
        $pedidos->status = 0;
        $pedidos->save();

        return redirect("/");
    }

    public function getPedidos(){
        $pedidos = Pedidos::query()->where('status', 'LIKE', "0")->get();
        return view('layouts/staff/pedidos', ['pedidos' => $pedidos]);
    }

    public function getPedidosEnviados(){
        $pedidos = Pedidos::query()->where('status', 'LIKE', "1")->get();
        return view('layouts/staff/pedidosEnviados', ['pedidos' => $pedidos]);
    }

    public function postAtualizaStatusPed($id){
        $pedidos = Pedidos::find($id);
        $pedidos->status = 1;
        $pedidos->update();

        return redirect("/staff/pedidosEnviados");
    }
}
