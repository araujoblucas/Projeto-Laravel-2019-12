<?php

namespace App\Http\Controllers;

use App\AboutTeam;
use App\AboutUs;
use App\Post;
use App\Contact;
use App\Gallery;
use App\Price_table;
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
        $dados->autor = $request->autor;
        $dados->descricao = $request->descricao;

        $insert = $dados->save();

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


    public function aboutusUpdate(Request $request){
        $dados = AboutUs::findorfail(1);
        $dados->titulo = $request->titulo;
        $dados->subtitulo = $request->subtitulo;
        $dados->titulo2 = $request->titulo2;
        $dados->subtitulo2 = $request->subtitulo2;
        $dados->sobre = $request->sobre;
        $dados->video = $request->video;
        $dados->dado1 = $request->dado1;
        $dados->descdado1 = $request->descdado1;
        $dados->dado2 = $request->dado2;
        $dados->descdado2 = $request->descdado2;
        $dados->dado3 = $request->dado3;
        $dados->descdado3 = $request->descdado3;
        $dados->imagemdesc = $request->imagemdesc;
        $dados->titulo3 = $request->titulo3;
        $dados->subtitulo3 = $request->subtitulo3;
        $dados->descesq = $request->descesq;
        $dados->descdir = $request->descdir;
        $dados->estatistica1 = $request->estatistica1;
        $dados->descestatistica1 = $request->descestatistica1;
        $dados->estatistica2 = $request->estatistica2;
        $dados->descestatistica2 = $request->descestatistica2;
        $dados->estatistica3 = $request->estatistica3;
        $dados->descestatistica3 = $request->descestatistica3;
        $dados->estatistica4 = $request->estatistica4;
        $dados->descestatistica4 = $request->descestatistica4;
        $dados->imagemfaq = $request->imagemfaq;
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
        $dados->ask6 = $request->ask6;
        $dados->answer6 = $request->answer6;
        $dados->imagemcontato = $request->imagemcontato;
        $dados->titulocontato = $request->titulocontato;
        $dados->telefone = $request->telefone;
        $dados->email = $request->email;
        $dados->atendimento = $request->atendimento;
        $dados->save();

        return redirect()->route('admin_about_us');

    }

    public function gallery(){
        return view('admin.Gallery');
    }
    public function galleryupdate(Request $request){
        $dados = Gallery::findorfail(1);
        $dados->titulo = $request->titulo;
        $dados->booleangrid = $request->booleangrid;
        $dados->titulogrid = $request->titulogrid;
        $dados->subtitulogrid = $request->subtitulogrid;
        $dados->imagemgrid1 = $request->imagemgrid1;
        $dados->imagemgrid2 = $request->imagemgrid2;
        $dados->imagemgrid3 = $request->imagemgrid3;
        $dados->imagemgrid4 = $request->imagemgrid4;
        $dados->booleanhorizontal = $request->booleanhorizontal;
        $dados->titulohorizontal = $request->titulohorizontal;
        $dados->subtitulohorizontal = $request->subtitulohorizontal;
        $dados->imagemhorizontal1 = $request->imagemhorizontal1;
        $dados->legendahorizontal1 = $request->legendahorizontal1;
        $dados->imagemhorizontal2 = $request->imagemhorizontal2;
        $dados->legendahorizontal2 = $request->legendahorizontal2;
        $dados->imagemhorizontal3 = $request->imagemhorizontal3;
        $dados->legendahorizontal3 = $request->legendahorizontal3;
        $dados->imagemhorizontal4 = $request->imagemhorizontal4;
        $dados->legendahorizontal4 = $request->legendahorizontal4;
        $dados->imagemhorizontal5 = $request->imagemhorizontal5;
        $dados->legendahorizontal5 = $request->legendahorizontal5;
        $dados->save();
        return redirect()->route('admin_gallery');
    }

    public function logout(){
    	Auth::logout();
    }

    public function price_table(){
        return  view('admin.PriceTable');
    }
    public function price_tableUpdate(Request $request){
        $dados = Price_table::findorfail(1);
        $dados->titulo = $request->titulo;
        $dados->subtitulo = $request->subtitulo;
        $dados->titulo2 = $request->titulo2;
        $dados->subtitulo2 = $request->subtitulo2;
        $dados->descricao = $request->descricao;
        $dados->planoesquerdatitulo = $request->planoesquerdatitulo;
        $dados->planoesquerdasubtitulo = $request->planoesquerdasubtitulo;
        $dados->precoesquerda = $request->precoesquerda;
        $dados->esquerdalista1 = $request->esquerdalista1;
        $dados->esquerdalista2 = $request->esquerdalista2;
        $dados->esquerdalista3 = $request->esquerdalista3;
        $dados->esquerdalista4 = $request->esquerdalista4;
        $dados->esquerdalista5 = $request->esquerdalista5;
        $dados->esquerdalink = $request->esquerdalink;
        $dados->planocentrotitulo = $request->planocentrotitulo;
        $dados->planocentrosubtitulo = $request->planocentrosubtitulo;
        $dados->precocentro = $request->precocentro;
        $dados->centrolista1 = $request->centrolista1;
        $dados->centrolista2 = $request->centrolista2;
        $dados->centrolista3 = $request->centrolista3;
        $dados->centrolista4 = $request->centrolista4;
        $dados->centrolista5 = $request->centrolista5;
        $dados->centrolink = $request->centrolink;
        $dados->planodireitatitulo = $request->planodireitatitulo;
        $dados->planodireitasubtitulo = $request->planodireitasubtitulo;
        $dados->precodireita = $request->precodireita;
        $dados->direitalista1 = $request->direitalista1;
        $dados->direitalista2 = $request->direitalista2;
        $dados->direitalista3 = $request->direitalista3;
        $dados->direitalista4 = $request->direitalista4;
        $dados->direitalista5 = $request->direitalista5;
        $dados->direitalink = $request->direitalink;
        $dados->save();
        return redirect()->route('admin_price_table');
    }

    public function AdminPostShow($id){
        $post = Post::findorfail($id);
        return view('admin.PostShow')->withPost($post);
    }
}
