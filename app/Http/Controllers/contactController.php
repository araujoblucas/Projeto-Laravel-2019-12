<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller
{
    public function contact(){
        $dados = Contact::find(1);
        return view('Contact', [
            'dados' => $dados,
        ]);
    }
}
