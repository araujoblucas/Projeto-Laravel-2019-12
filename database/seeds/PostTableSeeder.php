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
            'img' => 'https://github.com/araujoblucas/Projeto-Laravel-2019-12/blob/master/storage/app/public/img/defaults/2000x1333.jpg?raw=true',
        ]);
        Post::create([
            'titulo' => 'titulo2',
            'descricao' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, <br>and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
            'autor' => 'autor1',
            'img' => 'https://github.com/araujoblucas/Projeto-Laravel-2019-12/blob/master/storage/app/public/img/defaults/2000x1333.jpg?raw=true',
        ]);
        Post::create([
            'titulo' => 'titulo3',
            'descricao' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, <br>and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
            'autor' => 'autor1',
            'img' => 'https://github.com/araujoblucas/Projeto-Laravel-2019-12/blob/master/storage/app/public/img/defaults/2000x1333.jpg?raw=true',
        ]);
        Post::create([
            'titulo' => 'titulo4',
            'descricao' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, <br>and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
            'autor' => 'autor1',
            'img' => 'https://github.com/araujoblucas/Projeto-Laravel-2019-12/blob/master/storage/app/public/img/defaults/2000x1333.jpg?raw=true',
        ]);
    }
}
