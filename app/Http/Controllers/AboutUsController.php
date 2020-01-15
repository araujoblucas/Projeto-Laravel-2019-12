<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AboutUs;
use App\faq;

class AboutUsController extends Controller
{
    public function aboutUs(){
        $faqs = faq::inRandomOrder()->get()->take(6);
        $dados = AboutUs::find(1);
        return view('AboutUs', [
            'faqs' => $faqs,
            'dados' => $dados,
        ]);
    }
}
