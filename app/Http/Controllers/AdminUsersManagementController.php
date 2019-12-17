<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class AdminUsersManagementController extends Controller
{
    public function AdminUsersManagement(){

        $query = User::select('id', 'name', 'email');

        if(request()->has('order') && request()->input('order') == 'desc'){
            $query = $query->orderBy('id', 'desc');
        }

        $users = $query->paginate(5);

        return view('AdminUsersManagement', compact('users'));

        return view('AdminUsersManagement');
    }
    public function index(){

        
    }
}
