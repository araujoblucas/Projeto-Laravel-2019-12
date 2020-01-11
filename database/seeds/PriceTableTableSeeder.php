<?php

use Illuminate\Database\Seeder;
use App\Price_table;

class PriceTableTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Price_table::create([
        'id' => '1',
        'titulo' => 'Nossos Planos',
        'subtitulo' => 'THEME\'S ELEMENTS',
        'titulo2' => 'Example of price table',
        'subtitulo2' => 'Price Table With Featured',
        'descricao' => 'A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents. I should be incapable of drawing a single stroke at the present moment.',
        'planoesquerdatitulo' => 'STARTER PLAN',
        'planoesquerdasubtitulo' => 'Suitable for starter',
        'precoesquerda' => '8,50',
        'esquerdalista1' => 'List item here',
        'esquerdalista2' => 'List item here',
        'esquerdalista3' => 'List item here',
        'esquerdalista4' => 'List item here',
        'esquerdalink' => '#',
        'planocentrotitulo' => 'ADVANCED PLAN',
        'planocentrosubtitulo' => 'Suitable for profession',
        'precocentro' => '35',
        'centrolista1' => 'List item here',
        'centrolista2' => 'List item here',
        'centrolista3' => 'List item here',
        'centrolista4' => 'List item here',
        'centrolink' => '#',
        'planodireitatitulo' => 'ENTERPRISE PLAN',
        'planodireitasubtitulo' => 'Suitable for corporate',
        'precodireita' => '15',
        'direitalista1' => 'List item here',
        'direitalista2' => 'List item here',
        'direitalista3' => 'List item here',
        'direitalista4' => 'List item here',
        'direitalink' => '#',



        ]);
    }
}
