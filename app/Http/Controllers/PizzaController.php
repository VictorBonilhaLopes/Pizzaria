<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pizza;

class PizzaController extends Controller
{
    public function getPizzasCardapio(){
        $pizzas = Pizza::all();
        return view('layouts/cliente/cardapio', ['pizzas' => $pizzas]);
    }
    public function getPizzas(){
        $pizzas = Pizza::all();
        return view('layouts/staff/pizzas', ['pizzas' => $pizzas]);
    }
    public function getPizza($id){
        $pizzas = Pizza::find($id);
        return view('layouts/staff/alteraPizza', ['pizzas' => $pizzas]);
    }

    public function postSalvaNovo(Request $request){
        $pizzas = new Pizza;
        $pizzas->nome = $request->input('nome');
        $pizzas->valor = $request->input('valor');
        $pizzas->src = $request->input('src');

        dd($pizzas);

        $pizzas->save();

        $allPizzas = Pizza::all();
        return view('layouts/staff/pizzas', ['pizzas' => $allPizzas]);
    }

    public function excluirPizza($id){
        $pizzas = Pizza::find($id);
        if ($pizzas) {
            $pizzas->delete();
        }

        $allPizzas = Pizza::all();
        return view('layouts/staff/pizzas', ['pizzas' => $allPizzas]);
    }
}