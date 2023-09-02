<?php

namespace Database\Seeders;

use App\Models\Establishment;
use App\Models\Event;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $establishment1 = Establishment::query()->where('id', '=', 1)->first();

        Event::create([
            'establishment_id' => $establishment1->id,
            'data' => '2023-07-01 11:00:00',
            'titulo' => 'Rodízio de pizza com música!',
            'descricao' => 'Desfrute de uma noite de sabores e melodias inesquecíveis na Pizza Chef! A pizzaria convida você para um delicioso rodízio de pizzas, acompanhado da encantadora música ao vivo do cantor sertanejo Estácio Lima.',
            'foto' => 'Events/imagem-rodizio.svg',
            'url' => null,
            'status' => 1,
        ]);

        $establishment2 = Establishment::query()->where('id',  '=', 2)->first();

        Event::create([
            'establishment_id' => $establishment2->id,
            'data' => '2023-08-22 16:00:00',
            'titulo' => 'Dennis DJ em Campo Mourão!',
            'descricao' => 'Prepare-se para uma tarde eletrizante em Campo Mourão! No dia 22/08, o Cayenna Club, na Usina Mourão, receberá pela primeira vez o aclamado DJ brasileiro Dennis DJ. Com suas batidas contagiantes e energia sem igual, Dennis promete agitar a cidade em um evento imperdível.',
            'foto' => 'Events/imagem-dennis.svg',
            'url' => 'https://www.grupointegrado.br/?keyword&creative&gad=1&gclid=Cj0KCQjw9MCnBhCYARIsAB1WQVUUuejyNWeQaX7seYjm3zZljyjwjBrQCMM-trau2Ud_VpczAUSwtjgaAlisEALw_wcB',
            'status' => 1,
        ]);
    }
}
