<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            EstablishmentSeeder::class,
            EventSeeder::class,
            BannerSeeder::class,
            CategorySeeder::class,
            CategoryEstablishmentSeeder::class,
            ProductSeeder::class,
            ProductImageSeeder::class,

        ]);
    }
}
