<?php

use Illuminate\Database\Seeder;
use App\Imagem;

class ImagemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Imagem::create([
           'id' => '1',
           'link' => 'https://d4kkpd69xt9l7.cloudfront.net/sys-master/root/hb1/h77/8939926519838/nommo-gallery-1500x1000-1.jpg',
            'nome' => 'New Rondonia',
            'descricao' => 'Want to be notified of all the latest movie trailers? Subscribe to the channel and click the bell icon to stay up to date. US Release Date: November 8, 2019
Starring: Jim Carrey, James Marsden, Neal McDonough
Directed By: Jeff Fowler
Synopsis: A cop in the rural town of Green Hills will help Sonic escape from the government who is looking to capture him. '
        ]);
        Imagem::create([
            'id' => '2',
            'link' => 'https://www.bwg.com.br/wp-content/uploads/2018/11/transformacao_digital-1500x1000.png',
            'nome' => 'Imagem de esquilo cheirando flor faz sucesso na internet',
            'descricao' => 'Apesar de terem sido compartilhadas por ele em suas redes sociais em junho, as fotos chamaram a atenção de sites e jornais internacionais na semana passada. Segundo o New York Post, Duijn disse que foi para a Áustria especialmente para fotografar esquilos terrestres.',
        ]);
        Imagem::create([
            'id' => '3',
            'link' => 'https://images5.alphacoders.com/686/thumb-1920-686000.jpg',
            'nome' => 'Imagem de esquilo cheirando flor faz sucesso na internet',
            'descricao' => 'Apesar de terem sido compartilhadas por ele em suas redes sociais em junho, as fotos chamaram a atenção de sites e jornais internacionais na semana passada. Segundo o New York Post, Duijn disse que foi para a Áustria especialmente para fotografar esquilos terrestres.',
        ]);
        Imagem::create([
            'id' => '4',
            'link' => 'https://d4kkpd69xt9l7.cloudfront.net/sys-master/root/ha5/h1e/8939927044126/nommo-gallery-1500x1000-9.jpg',
            'nome' => 'Imagem de esquilo cheirando flor faz sucesso na internet',
            'descricao' => 'Apesar de terem sido compartilhadas por ele em suas redes sociais em junho, as fotos chamaram a atenção de sites e jornais internacionais na semana passada. Segundo o New York Post, Duijn disse que foi para a Áustria especialmente para fotografar esquilos terrestres.',
        ]);
    }

}
