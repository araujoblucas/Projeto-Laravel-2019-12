<?php




namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use App\Partner;
use App\AboutUs;
use App\faq;
use App\Home;
use App\Comment;
use App\Post;
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
        $recent = Post::orderBy('created_at', 'desc')->take(3)->get();
        $comments = Comment::inRandomOrder()->get()->take(2);
        $dados = Home::find(1);
        $sobrenos = AboutUs::find(1);
        $partners = Partner::inRandomOrder()->get()->take(6);
        $faqs = faq::inRandomOrder()->get()->take(5);
        return view('index', [
            'recents' => $recent,
            'comments' => $comments,
            'dados' => $dados,
            'partners' => $partners,
            'sobrenos' => $sobrenos,
            'faqs' => $faqs
        ]);
    }
}
