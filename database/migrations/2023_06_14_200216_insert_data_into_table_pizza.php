<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Pizza;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Pizza::create([
            "nome"=>"Napolitana",
            "valor"=>45,
            "src"=>"https://www.sabornamesa.com.br/media/k2/items/cache/0b242dd5a6f3b60d9c07a5d96a2bc449_XL.jpg"
        ]);

        Pizza::create([
            "nome"=>"Portuguesa",
            "valor"=>40,
            "src"=>"https://res.cloudinary.com/mrancho/cardapio/2016/06/pizza-portuguesa_min.jpg"
        ]);
        
        Pizza::create([
            "nome"=>"Calabresa",
            "valor"=>45,
            "src"=>"https://cdn0.tudoreceitas.com/pt/posts/9/8/3/pizza_calabresa_e_mussarela_4389_600.jpg"
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
