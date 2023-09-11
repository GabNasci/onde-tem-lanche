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
            'preco' => 42.50
        ]);

        Product::create([
            'establishment_id' =>$establishment1->id,
            'nome_produto' => 'Pepperoni',
            'tipo'=> 'Pizza de 12 pedaços',
            'promocional' => null,
            'descricao' => 'Uma clássica pizza italiana com uma base de molho de tomate, queijo mussarela, folhas frescas de rúcula orgânica, tomates secos e um fio de azeite de oliva.',
            'preco' => 44.50
        ]);

        $establishment2 = Establishment::query()->where('id', '=', 2)->first();

        Product::create([
            'establishment_id' =>$establishment2->id,
            'nome_produto' => 'X-Burger',
            'tipo' => 'Tradicionais',
            'promocional' => null,
            'descricao' => 'Sabor inigualável no nosso x-burger: pão fresco, hambúrguer artesanal, alface crocante, molho especial e queijo cheddar derretido. Irresistível! 🍔🧀🥬',
            'preco' => 23,00
        ]);

        Product::create([
            'establishment_id' =>$establishment2->id,
            'nome_produto' => 'X-Bacon',
            'tipo'=> 'Tradicionais',
            'promocional' => null,
            'descricao' => 'Satisfação garantida com nosso X-Bacon: pão fresco, hambúrguer artesanal, alface, molho especial, bacon crocante e queijo cheddar derretido. Uma explosão de sabores! 🍔🥓🧀🥬',
            'preco' => 27.00
        ]);

        Product::create([
            'establishment_id' =>$establishment2->id,
            'nome_produto' => 'Batata frita',
            'tipo'=> 'Porções',
            'promocional' => null,
            'descricao' => 'Nossa batata frita vem acompanhada com nosso molho especial (o mesmo que adicionamos aos lanches) e maionese temperada!',
            'preco' => 29.00
        ]);

        Product::create([
            'establishment_id' =>$establishment2->id,
            'nome_produto' => 'Coca-Cola',
            'tipo'=> 'Bebidas',
            'promocional' => null,
            'descricao' => 'Lata 350ml',
            'preco' => 6.00
        ]);

        $establishment3 = Establishment::query()->where('id', '=', 3)->first();

        Product::create([
            'establishment_id' =>$establishment3->id,
            'nome_produto' => 'Filé Mignon',
            'tipo' => 'Executivos',
            'promocional' => null,
            'descricao' => 'Filé mignon grelhado, regado com molho de vinho tinto e acompanhado de purê de batatas trufado.',
            'preco' => 45.00
        ]);

        Product::create([
            'establishment_id' =>$establishment3->id,
            'nome_produto' => 'Ravióli de Abóbora',
            'tipo'=> 'Executivos',
            'promocional' => null,
            'descricao' => 'Raviólis recheados com abóbora assada, servidos com manteiga de sálvia e queijo parmesão ralado.',
            'preco' => 35.00
        ]);

        Product::create([
            'establishment_id' =>$establishment3->id,
            'nome_produto' => 'Risoto de Cogumelos',
            'tipo'=> 'Executivos',
            'promocional' => 'Em promoção!',
            'descricao' => 'Risoto cremoso preparado com cogumelos selvagens, queijo pecorino e toque de trufas.',
            'preco' => 45.00
        ]);

        Product::create([
            'establishment_id' =>$establishment3->id,
            'nome_produto' => 'Coca-Cola',
            'tipo'=> 'Bebidas',
            'promocional' => null,
            'descricao' => 'Lata de 350ml',
            'preco' => 5.00
        ]);

        Product::create([
            'establishment_id' =>$establishment3->id,
            'nome_produto' => 'Suco de Laranja',
            'tipo'=> 'Bebidas',
            'promocional' => null,
            'descricao' => 'Copo de 350ml',
            'preco' => 7.00
        ]);

        Product::create([
            'establishment_id' =>$establishment3->id,
            'nome_produto' => 'Água',
            'tipo'=> 'Bebidas',
            'promocional' => null,
            'descricao' => 'Garrafa de 500ml sem gás',
            'preco' => 3.00
        ]);

        $establishment4 = Establishment::query()->where('id', '=', 4)->first();

        Product::create([
            'establishment_id' =>$establishment4->id,
            'nome_produto' => 'Americano Clássico',
            'tipo' => 'Temáticos',
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

        $establishment5 = Establishment::query()->where('id', '=', 5)->first();

        Product::create([
            'establishment_id' =>$establishment5->id,
            'nome_produto' => 'Batata frita',
            'tipo' => 'Porções',
            'promocional' => null,
            'descricao' => 'Nossa batata frita vem acompanhada com maionese temperada!',
            'preco' => 15.00
        ]);

        Product::create([
            'establishment_id' =>$establishment5->id,
            'nome_produto' => 'Anéis de Cebola',
            'tipo' => 'Porções',
            'promocional' => null,
            'descricao' => 'Anéis de cebola acompanhadas de maionese temperada!',
            'preco' => 15.00
        ]);

        Product::create([
            'establishment_id' =>$establishment5->id,
            'nome_produto' => 'Frango Frito',
            'tipo' => 'Porções',
            'promocional' => null,
            'descricao' => 'Frango frito empanado super crocante por fora e suculento por dentro!',
            'preco' => 35.00
        ]);

        Product::create([
            'establishment_id' =>$establishment5->id,
            'nome_produto' => 'Trio Super Borcelle',
            'tipo' => 'Trios',
            'promocional' => 'Em promoção!',
            'descricao' => 'Trio de batata frita, batata frita com cheddar e bacon e anéis de cebola acompanhada do molho picante Borcelle!',
            'preco' => 75.00
        ]);

        Product::create([
            'establishment_id' =>$establishment5->id,
            'nome_produto' => 'Trio Famiglia Borcelle',
            'tipo' => 'Trios',
            'promocional' => null,
            'descricao' => 'Trio de iscas de tilápia, batata frita e calabresa acebolada com nosso molho de alho!',
            'preco' => 80.00
        ]);


    }
}
