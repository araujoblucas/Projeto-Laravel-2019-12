<?php




namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {



        $query = User::select('id', 'name', 'email');

        if(request()->has('order') && request()->input('order') == 'desc'){
            $query = $query->orderBy('id', 'desc');
        }

        $users = $query->paginate(3);

        return view('home', compact('users'));
    }

    public function teta(){

        return view('newhome');
    }
}
