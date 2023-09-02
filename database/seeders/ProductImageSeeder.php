<?php

namespace Database\Seeders;

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
        $product1 = Product::query()->where('id', '=', 1)->first();

        ProductImage::create([
            'product_id' => $product1->id,
            'imagem' => 'Products/rucula-com-tomate-seco.svg',
        ]);

        $product2 = Product::query()->where('id', '=', 2)->first();

        ProductImage::create([
            'product_id' => $product2->id,
            'imagem' => 'Products/margherita.svg',
        ]);

        $product3 = Product::query()->where('id', '=', 3)->first();

        ProductImage::create([
            'product_id' => $product3->id,
            'imagem' => 'Products/Pepperoni.svg',
        ]);
    }
}
