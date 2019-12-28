<?php

use App\Link;
use Illuminate\Database\Seeder;


class LinksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Link::create([
            'nome' => 'Home',
            'link' => 'home',

        ]);
        Link::create([
            'nome' => 'Link',
            'link' => 'link',

        ]);
        Link::create([
            'nome' => 'Link 1',
            'link' => 'link_1',

        ]);
        Link::create([
            'nome' => 'Link 2',
            'link' => 'link_2',

        ]);
        Link::create([
            'nome' => 'Link 3',
            'link' => 'link_3',

        ]);
        Link::create([
            'nome' => 'Blog',
            'link' => 'blog',

        ]);
    }
}
