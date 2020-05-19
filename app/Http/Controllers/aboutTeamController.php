<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AboutTeam;
use App\Partner;

class AboutTeamController extends Controller
{
    public function aboutTeam(){
        $dados = AboutTeam::Find(1);
        $partners = Partner::all();
        return view('AboutTeam', [
            'dados' => $dados,
            'partners' => $partners,

        ]);
    }
}
