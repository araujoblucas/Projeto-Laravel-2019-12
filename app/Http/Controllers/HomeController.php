<?php




namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use App\Partner;
use App\AboutUs;


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
        $sobrenos = AboutUs::find(1);
        $partners = Partner::inRandomOrder()->get()->take(6);
        return view('index', [
            'partners' => $partners,
            'sobrenos' => $sobrenos,
        ]);
    }
}
