<?php
use App\Gallery;
use Illuminate\Database\Seeder;

class GalleryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Gallery::create([
            'id' =>'1',
            'titulo' =>'Galeria',
            'titulo2' => 'Veja nossa',
            'subtitulo' => 'dos nossos eventos',
        ]);
    }
}
