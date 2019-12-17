<?php

namespace App\Http\Controllers;


use Auth;
use app\User;
use Illuminate\Http\Request;
use App\Http\Requests\PostLoginRequest;

class AdminController extends Controller
{
    public function admin() {
        return view('admin.home');
    }

    public function aboutUs(){
    	return view('admin.about_us');
    }

    public function login() {
    	return view('login');
    }

    public function postLogin(PostLoginRequest $request) {
    	if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
    		return "true";
    	} else {
    		return "false";
    	}
    }

    public function logout(){
    	Auth::logout();
    }

}
