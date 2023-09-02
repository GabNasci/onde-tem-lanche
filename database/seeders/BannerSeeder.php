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
            'is_destaque' => true,
        ]);

        Banner::create([
            'establishment_id' => $establishment1->id,
            'imagem' => 'Banners/imagem-pizzachef3.svg',
            'is_destaque' => true,
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
            'is_destaque' => true,
        ]);

        Banner::create([
            'establishment_id' => $establishment2->id,
            'imagem' => 'Banners/imagem-burgerpark3.svg',
            'is_destaque' => true,
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
            'is_destaque' => true,
        ]);

        Banner::create([
            'establishment_id' => $establishment3->id,
            'imagem' => 'Banners/imagem-fauget3.svg',
            'is_destaque' => true,
        ]);
    }
}
