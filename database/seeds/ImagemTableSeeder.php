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
           'link' => 'https://raw.githubusercontent.com/araujoblucas/Projeto-Laravel-2019-12/master/storage/app/public/img/defaults/1500x1000.jpg',
            'nome' => 'New Rondonia',
            'descricao' => 'Want to be notified of all the latest movie trailers? Subscribe to the channel and click the bell icon to stay up to date. US Release Date: November 8, 2019
Starring: Jim Carrey, James Marsden, Neal McDonough
Directed By: Jeff Fowler
Synopsis: A cop in the rural town of Green Hills will help Sonic escape from the government who is looking to capture him. '
        ]);
        Imagem::create([
            'id' => '2',
            'link' => 'https://raw.githubusercontent.com/araujoblucas/Projeto-Laravel-2019-12/master/storage/app/public/img/defaults/1500x1000.jpg',
            'nome' => 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...',
            'descricao' => 'There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain...',
        ]);
        Imagem::create([
            'id' => '3',
            'link' => 'https://raw.githubusercontent.com/araujoblucas/Projeto-Laravel-2019-12/master/storage/app/public/img/defaults/1500x1000.jpgs',
            'nome' => 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...',
            'descricao' => 'There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain...',
        ]);
        Imagem::create([
            'id' => '4',
            'link' => 'https://raw.githubusercontent.com/araujoblucas/Projeto-Laravel-2019-12/master/storage/app/public/img/defaults/1500x1000.jpg',
            'nome' => 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...',
            'descricao' => 'There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain...',
        ]);
    }

}
