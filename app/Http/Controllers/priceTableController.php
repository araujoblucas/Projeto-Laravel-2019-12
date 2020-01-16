<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Price_table;
class priceTableController extends Controller
{
    public function priceTable() {
        $dados = Price_table::find(1);
        return view('PriceTable' ,[
            'dados' => $dados,
        ]);
    }
}
