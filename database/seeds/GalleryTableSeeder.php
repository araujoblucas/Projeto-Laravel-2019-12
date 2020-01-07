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
            'booleangrid' => '0',
            'titulogrid' => '',
            'subtitulogrid' => '',
            'imagemgrid1' => '',
            'imagemgrid2' => '',
            'imagemgrid3' => '',
            'imagemgrid4' => '',
            'booleanhorizontal' => '0',
            'titulohorizontal' => '',
            'subtitulohorizontal' => '',
            'imagemhorizontal1' => '',
            'imagemhorizontal2' => '',
            'imagemhorizontal3' => '',
            'imagemhorizontal4' => '',
            'imagemhorizontal5' => '',
        ]);
    }
}
