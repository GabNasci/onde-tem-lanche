<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'nome' => 'Pizzaria',
                'icone' => 'Filters/filtro_pizza.svg'
            ],
            [
                'nome' => 'Hamburgueria',
                'icone' => 'Filters/filtro_burger.svg'
            ],
            [
                'nome' => 'Hot Dogs',
                'icone' => 'Filters/filtro_dog.svg'
            ],
            [
                'nome' => 'Porções',
                'icone' => 'Filters/filtro_porcao.svg'
            ],
            [
                'nome' => 'Vegetariana',
                'icone' => 'Filters/filtro_veg.svg'
            ],
            [
                'nome' => 'Sem Glúten',
                'icone' => 'Filters/filtro_gluten.svg'
            ],
            [
                'nome' => 'Música',
                'icone' => 'Filters/filtro_musica.svg'
            ],
            [
                'nome' => 'Drinks',
                'icone' => 'Filters/filtro_drink.svg'
            ],
        ];

        foreach ($categories as $category) {
            Category::create([
                'nome' => $category['nome'],
                'icone' => $category['icone']
            ]);
        }

    }
}
