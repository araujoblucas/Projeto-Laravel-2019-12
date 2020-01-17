<?php

use Illuminate\Database\Seeder;
use App\Comment;
class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Comment::create([
            'nome' => 'Usuario1',
            'ocupacao' => 'ocupacao1',
            'frase' => 'orem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown',
            'icone' => 'https://images-na.ssl-images-amazon.com/images/I/51Z0JXIyc4L._SL1000_.jpg',
        ]);

        Comment::create([
            'nome' => 'Usuario2',
            'ocupacao' => 'ocupacao2',
            'frase' => 'orem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown',
            'icone' => 'https://images-na.ssl-images-amazon.com/images/I/51Z0JXIyc4L._SL1000_.jpg',
        ]);

        Comment::create([
            'nome' => 'Usuario3',
            'ocupacao' => 'ocupacao3',
            'frase' => 'orem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown',
            'icone' => 'https://images-na.ssl-images-amazon.com/images/I/51Z0JXIyc4L._SL1000_.jpg',
        ]);
    }
}
