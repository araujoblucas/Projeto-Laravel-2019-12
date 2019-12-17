<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class priceTableController extends Controller
{
    public function priceTable() {
        return view('PriceTable');
    }
}
