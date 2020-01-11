<?php

use Illuminate\Database\Seeder;
use App\Blog;

class BlogTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Blog::create([
            'id' => '1',
            'titulo' => 'Blog 4 Columns With Frame',
            'subtitulo' => 'CAPTION ALIGN HERE',
        ]);
    }
}
