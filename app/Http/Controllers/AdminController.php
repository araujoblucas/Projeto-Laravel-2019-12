<?php

namespace App\Http\Controllers;

use App\AboutTeam;
use App\Post;
use App\Contact;
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
        return view('admin.aboutUs');
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

    public function aboutTeamStore(Request $request) {
        $dados = AboutTeam::findorfail(1);
        $dados->id = 1;
        $dados->titulo = $request->titulo;
        $dados->subtitulo = $request->subtitulo;
        $dados->tituloImagem = $request->tituloImagem;
        $dados->subtituloImagem = $request->subtituloImagem;
        $dados->desc1 = $request->desc1;
        $dados->desc2 = $request->desc2;
        $dados->imagem = $request->imagem;
        $dados->dado1 = $request->dado1;
        $dados->descdado1 = $request->descdado1;
        $dados->dado2 = $request->dado2;
        $dados->descdado2 = $request->descdado2;
        $dados->dado3 = $request->dado3;
        $dados->descdado3 = $request->descdado3;
        $dados->dado4 = $request->dado4;
        $dados->descdado4 = $request->descdado4;
        $dados->ask1 = $request->ask1;
        $dados->answer1 = $request->answer1;
        $dados->ask2 = $request->ask2;
        $dados->answer2 = $request->answer2;
        $dados->ask3 = $request->ask3;
        $dados->answer3 = $request->answer3;
        $dados->ask4 = $request->ask4;
        $dados->answer4 = $request->answer4;
        $dados->ask5 = $request->ask5;
        $dados->answer5 = $request->answer5;
        $dados->video = $request->video;
        $dados->descVideo = $request->descVideo;
        $dados->tituloVideo = $request->tituloVideo;
        $dados->contatoTitulo = $request->contatoTitulo;
        $dados->contatodesc = $request->contatodesc;

        $dados->save();

        return redirect()->route('admin_about_team');

    }

    public function contact(){
        return view('admin.contact');
    }
    public function contactUpdate(Request $request){
        $dados = Contact::findorfail(1);
        $dados->titulo = $request->titulo ;
        $dados->subtitulo = $request->subtitulo ;
        $dados->imagem = $request->imagem ;
        $dados->telefone = $request->telefone ;
        $dados->desctelefone = $request->desctelefone ;
        $dados->email = $request->email;
        $dados->descemail = $request->descemail;
        $dados->localizacao = $request->localizacao;
        $dados->linklocalizacao = $request->linklocalizacao;
        $dados->messagetitulo = $request->messagetitulo;
        $dados->messagedesc = $request->messagedesc;
        $dados->facebook = $request->facebook;
        $dados->google = $request->google;
        $dados->skype = $request->skype;
        $dados->twitter = $request->twitter;
        $dados->save();
        return redirect()->route('admin_contact');
    }




    public function logout(){
    	Auth::logout();
    }



}
