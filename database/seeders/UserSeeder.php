<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Henrique Laureano de Souza',
            'email' => 'henrique.souza@grupointegrado.br',
            'telephone' => '+55 44 99999-9999',
            'password' => bcrypt('12345678'),
            'is_admin' => true,
            'avatar' => 'Avatars/desktop_perfil_foto.png',
        ]);
    }
}
