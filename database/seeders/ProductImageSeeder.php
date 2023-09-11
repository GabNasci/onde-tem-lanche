<?php

namespace Database\Seeders;

use App\Models\Establishment;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*------------------------------------------Pizza Chef-------------------------------------------------*/

        $product1 = Product::query()->where('nome_produto', 'Rúcula com Tomate Seco')->first();

        ProductImage::create([
            'product_id' => $product1->id,
            'imagem' => 'Products/rucula-com-tomate-seco.svg',
        ]);

        $product2 = Product::query()->where('nome_produto', 'Margherita')->first();

        ProductImage::create([
            'product_id' => $product2->id,
            'imagem' => 'Products/margherita.svg',
        ]);

        $product3 = Product::query()->where('nome_produto', 'Pepperoni')->first();

        ProductImage::create([
            'product_id' => $product3->id,
            'imagem' => 'Products/Pepperoni.svg',
        ]);

        /*--------------------------------------------------------------------------------------------------*/
        /*------------------------------------------Burger Park---------------------------------------------*/

        $product4 = Product::query()->where('nome_produto', 'X-Burger')->first();

        ProductImage::create([
            'product_id' => $product4->id,
            'imagem' => 'Products/x-burger.svg',
        ]);

        $product5 = Product::query()->where('nome_produto', 'X-Bacon')->first();

        ProductImage::create([
            'product_id' => $product5->id,
            'imagem' => 'Products/x-bacon.svg',
        ]);

        $product6 = Product::query()->where('id', '=',6)->first();

        ProductImage::create([
            'product_id' => $product6->id,
            'imagem' => 'Products/batata-frita.svg',
        ]);

        $product7 = Product::query()->where('id', '=',7)->first();

        ProductImage::create([
            'product_id' => $product7->id,
            'imagem' => 'Products/coca-cola.svg',
        ]);

        /*--------------------------------------------------------------------------------------------------*/
        /*---------------------------------------------Fauget-----------------------------------------------*/

        $product8 = Product::query()->where('nome_produto', 'Filé Mignon')->first();

        ProductImage::create([
            'product_id' => $product8->id,
            'imagem' => 'Products/file-mignon.svg',
        ]);

        $product9 = Product::query()->where('nome_produto', 'Ravióli de Abóbora')->first();

        ProductImage::create([
            'product_id' => $product9->id,
            'imagem' => 'Products/ravioli.svg',
        ]);

        $product10 = Product::query()->where('nome_produto', 'Risoto de Cogumelos')->first();

        ProductImage::create([
            'product_id' => $product10->id,
            'imagem' => 'Products/risoto.svg',
        ]);

        $product11 = Product::query()->where('id', '=',11)->first();

        ProductImage::create([
            'product_id' => $product11->id,
            'imagem' => 'Products/coca-cola.svg',
        ]);

        $product12 = Product::query()->where('nome_produto', 'Suco de Laranja')->first();

        ProductImage::create([
            'product_id' => $product12->id,
            'imagem' => 'Products/suco.svg',
        ]);

        $product13 = Product::query()->where('nome_produto', 'Água')->first();

        ProductImage::create([
            'product_id' => $product13->id,
            'imagem' => 'Products/agua.svg',
        ]);

        /*--------------------------------------------------------------------------------------------------*/
        /*---------------------------------------------Yummy------------------------------------------------*/

        $product14 = Product::query()->where('nome_produto', 'Americano Clássico')->first();

        ProductImage::create([
            'product_id' => $product14->id,
            'imagem' => 'Products/americano.svg',
        ]);

        $product15 = Product::query()->where('nome_produto', 'Hot Dog Paulista')->first();

        ProductImage::create([
            'product_id' => $product15->id,
            'imagem' => 'Products/paulista.svg',
        ]);

        $product16 = Product::query()->where('nome_produto', 'Yummy Veg')->first();

        ProductImage::create([
            'product_id' => $product16->id,
            'imagem' => 'Products/vegan.svg',
        ]);

        /*--------------------------------------------------------------------------------------------------*/
        /*-------------------------------------------Borcelle-----------------------------------------------*/

        $product17 = Product::query()->where('id', '=', 17)->first();

        ProductImage::create([
            'product_id' => $product17->id,
            'imagem' => 'Products/batata-frita.svg',
        ]);

        $product18 = Product::query()->where('nome_produto', 'Anéis de Cebola')->first();

        ProductImage::create([
            'product_id' => $product18->id,
            'imagem' => 'Products/cebola.svg',
        ]);

        $product19 = Product::query()->where('nome_produto', 'Frango Frito')->first();

        ProductImage::create([
            'product_id' => $product19->id,
            'imagem' => 'Products/frango.svg',
        ]);

        $product20 = Product::query()->where('nome_produto', 'Trio Super Borcelle')->first();

        ProductImage::create([
            'product_id' => $product20->id,
            'imagem' => 'Products/trio-1.svg',
        ]);

        $product21 = Product::query()->where('nome_produto', 'Trio Famiglia Borcelle')->first();

        ProductImage::create([
            'product_id' => $product21->id,
            'imagem' => 'Products/trio-2.svg',
        ]);


    }
}
