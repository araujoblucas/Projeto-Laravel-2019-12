<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Illuminate\Support\Facades\Validator;

class ProductsController extends Controller
{
    
	public function index(){
		dd(Product::all());
	}

	public function insert(){
		
		request()->validate([
            'name' => 'required|max:18',
            'description' => 'required',
            'value' => 'required|gt:10',
        ]);

		$product = new Product();

		$product->name = request()->input('name');
		$product->description = request()->input('description');
		$product->value = request()->input('value');

		$product->save();


		dd(Product::all());
	}

	public function register(){
		return view('register-products');
	}
}
