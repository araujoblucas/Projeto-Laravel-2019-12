<?php

use Illuminate\Database\Seeder;
use App\Post;
class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::create([
            'titulo' => 'titulo1',
            'descricao' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, <br>and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
            'autor' => 'autor1',
            'img' => 'https://images-na.ssl-images-amazon.com/images/I/51Z0JXIyc4L._SL1000_.jpg',
        ]);
        Post::create([
            'titulo' => 'titulo2',
            'descricao' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, <br>and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
            'autor' => 'autor1',
            'img' => 'https://ichef.bbci.co.uk/news/410/cpsprodpb/F403/production/_109476426_jheison3.png',
        ]);
        Post::create([
            'titulo' => 'titulo3',
            'descricao' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, <br>and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
            'autor' => 'autor1',
            'img' => 'https://images-na.ssl-images-amazon.com/images/I/51Z0JXIyc4L._SL1000_.jpg',
        ]);
        Post::create([
            'titulo' => 'titulo4',
            'descricao' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, <br>and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
            'autor' => 'autor1',
            'img' => 'https://ichef.bbci.co.uk/news/410/cpsprodpb/F403/production/_109476426_jheison3.png',
        ]);
    }
}
