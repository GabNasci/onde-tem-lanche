<?php

namespace Database\Seeders;

use App\Models\Banner;
use App\Models\Establishment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Query Builder
        $establishment1 = Establishment::query()->where('id',  '=', 1)->first();

        Banner::create([
            'establishment_id' => $establishment1->id,
            'imagem' => 'Banners/imagem-pizzachef1.svg',
            'is_destaque' => true,
        ]);

        Banner::create([
            'establishment_id' => $establishment1->id,
            'imagem' => 'Banners/imagem-pizzachef2.svg',
            'is_destaque' => false,
        ]);

        Banner::create([
            'establishment_id' => $establishment1->id,
            'imagem' => 'Banners/imagem-pizzachef3.svg',
            'is_destaque' => false,
        ]);

        $establishment2 = Establishment::query()->where('id',  '=', 2)->first();

        Banner::create([
            'establishment_id' => $establishment2->id,
            'imagem' => 'Banners/imagem-burgerpark1.svg',
            'is_destaque' => true,
        ]);

        Banner::create([
            'establishment_id' => $establishment2->id,
            'imagem' => 'Banners/imagem-burgerpark2.svg',
            'is_destaque' => false,
        ]);

        Banner::create([
            'establishment_id' => $establishment2->id,
            'imagem' => 'Banners/imagem-burgerpark3.svg',
            'is_destaque' => false,
        ]);

        $establishment3 = Establishment::query()->where('id',  '=', 3)->first();

        Banner::create([
            'establishment_id' => $establishment3->id,
            'imagem' => 'Banners/imagem-fauget1.svg',
            'is_destaque' => true,
        ]);

        Banner::create([
            'establishment_id' => $establishment3->id,
            'imagem' => 'Banners/imagem-fauget2.svg',
            'is_destaque' => false,
        ]);

        Banner::create([
            'establishment_id' => $establishment3->id,
            'imagem' => 'Banners/imagem-fauget3.svg',
            'is_destaque' => false,
        ]);

        $establishment4 = Establishment::query()->where('id',  '=', 4)->first();

        Banner::create([
            'establishment_id' => $establishment4->id,
            'imagem' => 'Banners/imagem-yummy1.svg',
            'is_destaque' => true,
        ]);

        Banner::create([
            'establishment_id' => $establishment4->id,
            'imagem' => 'Banners/imagem-yummy2.svg',
            'is_destaque' => false,
        ]);

        Banner::create([
            'establishment_id' => $establishment4->id,
            'imagem' => 'Banners/imagem-yummy3.svg',
            'is_destaque' => false,
        ]);

        $establishment5 = Establishment::query()->where('id',  '=', 5)->first();

        Banner::create([
            'establishment_id' => $establishment5->id,
            'imagem' => 'Banners/imagem-borcelle1.svg',
            'is_destaque' => true,
        ]);

        Banner::create([
            'establishment_id' => $establishment5->id,
            'imagem' => 'Banners/imagem-borcelle2.svg',
            'is_destaque' => false,
        ]);

        Banner::create([
            'establishment_id' => $establishment5->id,
            'imagem' => 'Banners/imagem-borcelle3.svg',
            'is_destaque' => false,
        ]);


    }
}
