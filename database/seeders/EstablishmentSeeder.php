<?php

namespace Database\Seeders;

use App\Models\Establishment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EstablishmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Establishment::create([
            'nome' => 'Pizza Chef',
            'descricao' => 'Pizza Chef, uma pizzaria em Campo Mourão que encanta com sabores autênticos. Massa crocante, ingredientes frescos e um ambiente aconchegante. Uma explosão de delícias para os amantes da pizza. Uma experiência gastronômica que vai além das expectativas.',
            'tipo' => 'Pizzaria',
            'imagem_logo' => 'Logos/pizza-chef.svg',
            'logradouro' => 'Av. Irmãos Pereira',
            'numero' => '44444',
            'complemento' => '',
            'bairro' => 'Centro',
            'cidade_estado' => 'Campo Mourão - PR',
            'horario_inicial' => '19:00',
            'horario_final' => '23:00',
            'site' => 'https://www.grupointegrado.br/?keyword&creative&gad=1&gclid=Cj0KCQjwgNanBhDUARIsAAeIcAvWtaQhvgZ7-m0KsXpGlDWX3b70iBeX8K-c-3MZ3s2UYcNnudv4SQsaAgdEEALw_wcB',
            'email' => 'atendimentopizzacheff@gmail.com',
            'whatsapp' => '44912341234',
            'instagram' => 'https://www.instagram.com/integradouniversitario/',
            'facebook' => null
        ]);

        Establishment::create([
            'nome' => 'Burger Park',
            'descricao' => 'Burger Park, o paraíso dos hambúrgueres artesanais. Combinações criativas, carnes suculentas e ingredientes frescos. Uma explosão de sabores em cada mordida. Uma experiência gastronômica única que vai deixar você apaixonado pelo sabor dos nossos hambúrgueres.',
            'tipo' => 'Hamburgueria',
            'imagem_logo' => 'Logos/burgerpark.svg',
            'logradouro' => 'Rua Josefat',
            'numero' => '562',
            'complemento' => '',
            'bairro' => 'Jardim América',
            'cidade_estado' => 'Campo Mourão - PR',
            'horario_inicial' => '19:00',
            'horario_final' => '23:00',
            'site' => 'https://www.grupointegrado.br/?keyword&creative&gad=1&gclid=Cj0KCQjwgNanBhDUARIsAAeIcAvWtaQhvgZ7-m0KsXpGlDWX3b70iBeX8K-c-3MZ3s2UYcNnudv4SQsaAgdEEALw_wcB',
            'whatsapp' => '44998878542',
            'instagram' => 'https://www.instagram.com/integradouniversitario/',
            'facebook' => '',
        ]);

        Establishment::create([
            'nome' => 'Fauget',
            'descricao' => 'Descubra o Fauget: o destino gastronômico em Campo Mourão! Sabores únicos, ambiente sofisticado e uma experiência inesquecível na culinária contemporânea. Aqui você encontrará uma atmosfera elegante e acolhedora, perfeita para encontros românticos ou jantares em família. Venha encantar-se conosco e desfrute de uma explosão de sabores incríveis!',
            'tipo' => 'Restaurante',
            'imagem_logo' => 'Logos/fauget.svg',
            'logradouro' => 'Av. Cândido Mendes',
            'numero' => '89756',
            'complemento' => '',
            'bairro' => 'Centro',
            'cidade_estado' => 'Campo Mourão - PR',
            'horario_inicial' => '11:00',
            'horario_final' => '13:30',
            'site' => 'https://www.grupointegrado.br/?keyword&creative&gad=1&gclid=Cj0KCQjwgNanBhDUARIsAAeIcAvWtaQhvgZ7-m0KsXpGlDWX3b70iBeX8K-c-3MZ3s2UYcNnudv4SQsaAgdEEALw_wcB',
            'whatsapp' => '44999633524',
            'instagram' => 'https://www.instagram.com/integradouniversitario/',
            'facebook' => '',
        ]);
    }
}
