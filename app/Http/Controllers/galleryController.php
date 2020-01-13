<?php

namespace App\Http\Controllers;
use App\Gallery;
use App\Imagem;
use Faker\Provider\Image;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function gallery(){
        $dados = Gallery::findorfail(1);
        $imagens = Imagem::all();
        return view('Gallery', [
            'dados' => $dados,
            'imagens' => $imagens
        ]);
    }
}
