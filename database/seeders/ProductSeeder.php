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

        $establishment = Establishment::query()->where('id', '=', 1)->first();

        Product::create([
            'establishment_id' =>$establishment->id,
            'nome_produto' => 'Rúcula com Tomate Seco',
            'preco' => 25.00
        ]);

        Product::create([
            'establishment_id' =>$establishment->id,
            'nome_produto' => 'Margherita',
            'preco' => 22.50
        ]);

        Product::create([
            'establishment_id' =>$establishment->id,
            'nome_produto' => 'Pepperoni',
            'preco' => 24.50
        ]);
    }
}
