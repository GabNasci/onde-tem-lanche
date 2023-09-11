<?php

namespace Database\Seeders;

use App\Models\Establishment;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $establishment = Establishment::query()->where('nome',  'Pizza Chef')->first();

        $establishment1 = Establishment::query()->where('id', '=', 1)->first();

        Product::create([
            'establishment_id' =>$establishment1->id,
            'nome_produto' => 'Rúcula com Tomate Seco',
            'tipo' => 'Pizza de 8 pedaços',
            'promocional' => 'Em promoção!',
            'descricao' => 'Uma clássica pizza italiana com uma base de molho de tomate, queijo mussarela, folhas frescas de rúcula orgânica, tomates secos e um fio de azeite de oliva.',
            'preco' => 25.00
        ]);

        Product::create([
            'establishment_id' =>$establishment1->id,
            'nome_produto' => 'Margherita',
            'tipo'=> 'Pizza de 12 pedaços',
            'promocional' => null,
            'descricao' => 'Uma clássica pizza italiana com uma base de molho de tomate, queijo mussarela, folhas frescas de rúcula orgânica, tomates secos e um fio de azeite de oliva.',
            'preco' => 22.50
        ]);

        Product::create([
            'establishment_id' =>$establishment1->id,
            'nome_produto' => 'Pepperoni',
            'tipo'=> 'Pizza de 12 pedaços',
            'promocional' => 'Em promoção!',
            'descricao' => 'Uma clássica pizza italiana com uma base de molho de tomate, queijo mussarela, folhas frescas de rúcula orgânica, tomates secos e um fio de azeite de oliva.',
            'preco' => 24.50
        ]);

        $establishment4 = Establishment::query()->where('id', '=', 4)->first();

        Product::create([
            'establishment_id' =>$establishment4->id,
            'nome_produto' => 'Americano Clássico',
            'tipo' => 'Especiais da casa',
            'promocional' => null,
            'descricao' => 'Delicie-se com nosso Americano Clássico: pão caseiro, salsicha artesanal, mostarda, ketchup e batata chips! Sabor inigualável. 🌭🍟',
            'preco' => 15.00
        ]);

        Product::create([
            'establishment_id' =>$establishment4->id,
            'nome_produto' => 'Hot Dog Paulista',
            'tipo'=> 'Temáticos',
            'promocional' => null,
            'descricao' => 'Não deixe de provar nosso Hot Dog Paulista, mêo! Pão caseiro, salsicha artesanal, purê de batatas, milho e o irresistível vinagrete de tomates. Batata chips inclusa. 🌭🍟',
            'preco' => 22.00
        ]);

        Product::create([
            'establishment_id' =>$establishment4->id,
            'nome_produto' => 'Yummy Veg',
            'tipo'=> 'Especiais da casa',
            'promocional' => 'Em promoção!',
            'descricao' => 'Explore o Yummy Veg: pão caseiro, Salsicha da Fazenda Futuro, molho de queijo vegano, picles de cebola roxa, vinagrete de tomates, batata-palha, mostarda e ketchup. Uma explosão de sabores veganos! 🌱🌭🍅',
            'preco' => 29.00
        ]);


        $establishment3 = Establishment::query()->where('id', '=', 3)->first();

        Product::create([
            'establishment_id' =>$establishment3->id,
            'nome_produto' => 'Americano Clássico',
            'tipo' => 'Especiais da casa',
            'promocional' => null,
            'descricao' => 'Delicie-se com nosso Americano Clássico: pão caseiro, salsicha artesanal, mostarda, ketchup e batata chips! Sabor inigualável. 🌭🍟',
            'preco' => 15.00
        ]);

        Product::create([
            'establishment_id' =>$establishment3->id,
            'nome_produto' => 'Hot Dog Paulista',
            'tipo'=> 'Temáticos',
            'promocional' => null,
            'descricao' => 'Não deixe de provar nosso Hot Dog Paulista, mêo! Pão caseiro, salsicha artesanal, purê de batatas, milho e o irresistível vinagrete de tomates. Batata chips inclusa. 🌭🍟',
            'preco' => 22.00
        ]);

        Product::create([
            'establishment_id' =>$establishment3->id,
            'nome_produto' => 'Yummy Veg',
            'tipo'=> 'Especiais da casa',
            'promocional' => 'Em promoção!',
            'descricao' => 'Explore o Yummy Veg: pão caseiro, Salsicha da Fazenda Futuro, molho de queijo vegano, picles de cebola roxa, vinagrete de tomates, batata-palha, mostarda e ketchup. Uma explosão de sabores veganos! 🌱🌭🍅',
            'preco' => 29.00
        ]);

    }
}
