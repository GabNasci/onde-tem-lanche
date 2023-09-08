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
                'icone' => 'Filters/filtro_pizza.svg',
                'icone_selecionado' => 'Filters/filtro_pizza-select.svg',
                'selecionada' => false,
            ],
            [
                'nome' => 'Hamburgueria',
                'icone' => 'Filters/filtro_burger.svg',
                'icone_selecionado' => 'Filters/filtro_burger-select.svg',
                'selecionada' => false,
            ],
            [
                'nome' => 'Hot Dogs',
                'icone' => 'Filters/filtro_dog.svg',
                'icone_selecionado' => 'Filters/filtro_dog-select.svg',
                'selecionada' => false,
            ],
            [
                'nome' => 'Porções',
                'icone' => 'Filters/filtro_porcao.svg',
                'icone_selecionado' => 'Filters/filtro_porcao-select.svg',
                'selecionada' => false,
            ],
            [
                'nome' => 'Vegetariana',
                'icone' => 'Filters/filtro_veg.svg',
                'icone_selecionado' => 'Filters/filtro_veg-select.svg',
                'selecionada' => false,
            ],
            [
                'nome' => 'Sem Glúten',
                'icone' => 'Filters/filtro_gluten.svg',
                'icone_selecionado' => 'Filters/filtro_gluten-select.svg',
                'selecionada' => false,
            ],
            [
                'nome' => 'Música',
                'icone' => 'Filters/filtro_musica.svg',
                'icone_selecionado' => 'Filters/filtro_musica-select.svg',
                'selecionada' => false,
            ],
            [
                'nome' => 'Drinks',
                'icone' => 'Filters/filtro_drink.svg',
                'icone_selecionado' => 'Filters/filtro_drink-select.svg',
                'selecionada' => false,
            ],
        ];

        foreach ($categories as $category) {
            Category::create([
                'nome' => $category['nome'],
                'icone' => $category['icone'],
                'icone_selecionado' => $category['icone_selecionado']
            ]);
        }

    }
}
