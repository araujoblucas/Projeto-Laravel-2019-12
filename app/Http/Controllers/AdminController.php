<?php

namespace App\Http\Controllers;

use App\Post;
use Auth;
use app\User;
use Illuminate\Http\Request;
use App\Http\Requests\PostLoginRequest;

class AdminController extends Controller
{
    public function index(){
        dd(Post::all());
    }

    private $post;

    public function __construct(Post $post){
        $this->post = $post;
    }




    public function adminConfig() {
        return view('admin.Config');
    }

    protected function PostList() {
        return view('admin.PostList');
    }

    public function PostCreator() {
        return view('admin.PostCreator');
    }

    public function postStore(Request $request) {
        $dados = new Post;
        $dados->titulo = $request->titulo;
        $dados->img = $request->img;
        $dados->descricao = $request->descricao;

        $insert = $dados->save();
        if($insert)
            echo "<script>alert('Inserido com sucesso!');</script>";
        else
            echo "<script>alert('Erro ao Inserir');</script>";

        return redirect()->route('PostList');

    }

    public function PostUpdater(Request  $request, $id) {
        $post = Post::findorfail($id);
        $post->titulo = $request->titulo;
        $post->descricao = $request->descricao;
        $post->img = $request->img;
        $post->save();

        return redirect()->route('PostList');
    }

    public function Editor($id) {
        $post = Post::find($id);
        return view('admin.PostEditor')->withPost($post);
    }

    public function postDelete($id) {
        $post = Post::find($id);
        $post->delete();
        return redirect()->route('PostList');
    }

    public function aboutUs(){
        return view('admin.about_us');
    }

    public function aboutTeam(){
        return view('admin.AboutTeam');
    }

    public function login() {
    	return view('login');
    }

    public function postLogin(PostLoginRequest $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return "true";
        } else {
            return "false";
        }
    }


    public function logout(){
    	Auth::logout();
    }



}
