<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\CategoryEstablishment;
use App\Models\Establishment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoryEstablishmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categoriaPizza = Category::query()->where('nome', 'Pizzaria')->first();
        $categoriaVeg = Category::query()->where('nome', 'Vegetariana')->first();
        $categoriaMusica = Category::query()->where('nome', 'Música')->first();
        $categoriaDrinks = Category::query()->where('nome', 'Drinks')->first();
        $categoriaBurger = Category::query()->where('nome', 'Hamburgueria')->first();
        $categoriaPorcao = Category::query()->where('nome', 'Porções')->first();

        $establishmentPizzaChef = Establishment::query()->where('nome',  'Pizza Chef')->first();

        CategoryEstablishment::create([
            'category_id' => $categoriaPizza->id,
            'establishment_id' => $establishmentPizzaChef->id
        ]);

        CategoryEstablishment::create([
            'category_id' => $categoriaVeg->id,
            'establishment_id' => $establishmentPizzaChef->id
        ]);

        CategoryEstablishment::create([
            'category_id' => $categoriaMusica->id,
            'establishment_id' => $establishmentPizzaChef->id
        ]);

        $establishmentFauget = Establishment::query()->where('nome',  'Fauget')->first();

        CategoryEstablishment::create([
            'category_id' => $categoriaDrinks->id,
            'establishment_id' => $establishmentFauget->id
        ]);

        CategoryEstablishment::create([
            'category_id' => $categoriaVeg->id,
            'establishment_id' => $establishmentFauget->id
        ]);

        CategoryEstablishment::create([
            'category_id' => $categoriaMusica->id,
            'establishment_id' => $establishmentFauget->id
        ]);

        $establishmentBurgerPark = Establishment::query()->where('nome',  'Burger Park')->first();

        CategoryEstablishment::create([
            'category_id' => $categoriaBurger->id,
            'establishment_id' => $establishmentBurgerPark->id
        ]);

        CategoryEstablishment::create([
            'category_id' => $categoriaPorcao->id,
            'establishment_id' => $establishmentBurgerPark->id
        ]);

    }
}
