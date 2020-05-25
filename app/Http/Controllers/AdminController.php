<?php

namespace App\Http\Controllers;


use App\AboutTeam;
use App\AboutUs;
use App\ConfigDefault;
use App\faq;
use App\Post;
use App\Contact;
use App\Gallery;
use App\Price_table;
use App\Imagem;
use App\Comment;
use Auth;
use app\User;
use App\Home;
use Faker\Provider\Image;
use Illuminate\Http\Request;
use App\Http\Requests\PostLoginRequest;
use Illuminate\Support\Facades\Route;


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
        $dados = ConfigDefault::findorfail(1);
        return view('pages.default', [
            'dados' => $dados
        ]);
    }

    protected function PostList() {
        $posts = Post::all();
        return view('pages.PostList',
            [
                'posts' => $posts
            ]
        );
    }

    public function PostCreator() {
        return view('pages.PostCreator');
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
        return view('pages.PostEditor')->withPost($post);
    }

    public function postDelete($id) {
        $post = Post::find($id);
        $post->delete();
        return redirect()->route('PostList');
    }

    public function aboutUs(){
        $faqs = faq::all();
        $dados = AboutUs::find(1);
        return view('pages.aboutUs', [
            'faqs' => $faqs,
            'dados' => $dados,
        ]);
    }
    public function aboutTeam(){
        $dados = AboutTeam::findorfail(1);
        $route_name = Route::current()->getName() == "admin_about_team";
        return view('pages.aboutTeam', [
            'dados' => $dados,
            'route_name' => $route_name
        ]);
    }

    public function login() {
    	return view('pages.login');
    }

    public function postLogin(PostLoginRequest $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('admin_config');
        } else {
            return redirect()->route('login');
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
        $dados->contatoTitulo = $request->contatoTitulo;
        $dados->contatodesc = $request->contatodesc;

        $dados->save();

        return redirect()->route('admin_about_team');

    }

    public function contact(){
        $dados = Contact::findorfail(1);
        return view('pages.contact', [
            'dados'=>$dados,
        ]);
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
        $dados->imagem = $request->imagem;
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
        $dados->imagemcontato = $request->imagemcontato;
        $dados->titulocontato = $request->titulocontato;
        $dados->telefone = $request->telefone;
        $dados->email = $request->email;
        $dados->atendimento = $request->atendimento;
        $dados->save();

        return redirect()->route('admin_about_us');

    }

    public function gallery(){
        $dados = Gallery::findorfail('1');
        $imagens = Imagem::all()->sortByDesc('created_at');
        return view('pages.gallery', [
            'imagens' => $imagens,
            'dados' => $dados
        ]);
    }
    public function galleryupdate(Request $request){
        $dados = Gallery::findorfail(1);
        $dados->titulo = $request->titulo;
        $dados->titulo2 = $request->titulo2;
        $dados->subtitulo = $request->subtitulo;
        $dados->save();
        return redirect()->route('admin_gallery');
    }

    public function logout(){
    	Auth::logout();
    	return redirect()->route('login');
    }

    public function price_table(){
        $dados = Price_table::findorfail(1);
        return  view('pages.priceTable', [
            'dados' => $dados,
        ]);
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
        $dados->esquerdalink = $request->esquerdalink;
        $dados->planocentrotitulo = $request->planocentrotitulo;
        $dados->planocentrosubtitulo = $request->planocentrosubtitulo;
        $dados->precocentro = $request->precocentro;
        $dados->centrolista1 = $request->centrolista1;
        $dados->centrolista2 = $request->centrolista2;
        $dados->centrolista3 = $request->centrolista3;
        $dados->centrolista4 = $request->centrolista4;
        $dados->centrolink = $request->centrolink;
        $dados->planodireitatitulo = $request->planodireitatitulo;
        $dados->planodireitasubtitulo = $request->planodireitasubtitulo;
        $dados->precodireita = $request->precodireita;
        $dados->direitalista1 = $request->direitalista1;
        $dados->direitalista2 = $request->direitalista2;
        $dados->direitalista3 = $request->direitalista3;
        $dados->direitalista4 = $request->direitalista4;
        $dados->direitalink = $request->direitalink;
        $dados->save();
        return redirect()->route('admin_price_table');
    }

    public function AdminPostShow($id){
        $post = Post::findorfail($id);

        $recents = Post::where('id', '<>', $post->id)->orderBy('id', 'desc')->take(5)->get();

        return view('admin.PostShow', [
            'recents' => $recents,
            'post' => $post
        ]);
    }
    public function ImagemCreate(){
        return view('admin.ImagemCreator');
    }

    public function ImagemStore(Request $request) {
        $dados = new Imagem;
        $dados->nome = $request->nome;
        $dados->descricao = $request->descricao;
        $dados->link = $request->link;
        $dados->save();
        return redirect()->route('admin_gallery');
    }

    public function ImagemEditor($id) {
        $dados = Imagem::findorfail($id);
        return view('admin.ImagemEditor', [
            'dados' => $dados
        ]);
    }
    public function ImagemUpdate(Request $request, $id) {
        $dados = Imagem::find($id);
        $dados->id = $request->id;
        $dados->nome = $request->nome;
        $dados->descricao = $request->descricao;
        $dados->link = $request->link;
        $dados->save();
        return redirect()->route('admin_gallery');
    }
    public function ImagemDelete($id){
        $imagem = Imagem::find($id);
        $imagem->delete();
        return redirect()->route('admin_gallery');
    }

    public function Home(){
        $dados = Home::find(1);
        $comments = Comment::all()->sortByDesc('created_at');
        return view('admin.home', [
            'dados' => $dados,
            'comments' => $comments,
        ]);
    }


    public function HomeUpdate(Request $request){
        $dados = Home::find(1);
        $dados->id = 1;
        $dados->container1titulo = $request->container1titulo;
        $dados->container1subtitulo = $request->container1subtitulo;
        $dados->container1descricao =$request->container1descricao;
        $dados->container1imagem = $request->container1imagem;
        $dados->container1titulo2 = $request->container1titulo2;
        $dados->container1subtitulo2 = $request->container1subtitulo2;
        $dados->container1descricao2 = $request->container1descricao2;
        $dados->container1imagem2 = $request->container1imagem2;
        $dados->container2titulo = $request->container2titulo;
        $dados->container2descricao =$request->container2descricao;
        $dados->container2imagem = $request->container2imagem;
        $dados->container3titulo = $request->container3titulo;
        $dados->container3subtitulo = $request->container3subtitulo;
        $dados->container3icone1 = $request->container3icone1;
        $dados->container3titulo1 = $request->container3titulo1;
        $dados->container3descricao1 = $request->container3descricao1;
        $dados->container3icone2 = $request->container3icone2;
        $dados->container3titulo2 = $request->container3titulo2;
        $dados->container3descricao2 = $request->container3descricao2;
        $dados->container3icone3 = $request->container3icone3;
        $dados->container3titulo3 = $request->container3titulo3;
        $dados->container3descricao3 = $request->container3descricao3;
        $dados->container3icone4 = $request->container3icone4;
        $dados->container3titulo4 = $request->container3titulo4;
        $dados->container3descricao4 = $request->container3descricao4;
        $dados->container3icone5 = $request->container3icone5;
        $dados->container3titulo5 = $request->container3titulo5;
        $dados->container3descricao5 = $request->container3descricao5;
        $dados->container3icone6 = $request->container3icone6;
        $dados->container3titulo6 = $request->container3titulo6;
        $dados->container3descricao6 = $request->container3descricao6;
        $dados->container4titulo = $request->container4titulo;
        $dados->container4link = $request->container4link;
        $dados->container4imagem = $request->container4imagem;
        $dados->container5titulo = $request->container5titulo;
        $dados->container5descricao = $request->container5descricao;
        $dados->container5icone1 = $request->container5icone1;
        $dados->container5titulo1 = $request->container5titulo1;
        $dados->container5descricao1 = $request->container5descricao1;
        $dados->container5background1 = $request->container5background1;
        $dados->container5icone2 = $request->container5icone2;
        $dados->container5titulo2 = $request->container5titulo2;
        $dados->container5descricao2 = $request->container5descricao2;
        $dados->container5background2 = $request->container5background2;
        $dados->container5icone3 = $request->container5icone3;
        $dados->container5titulo3 = $request->container5titulo3;
        $dados->container5descricao3 = $request->container5descricao3;
        $dados->container5background3 = $request->container5background3;
        $dados->container6imagem = $request->container6imagem;
        $dados->save();

        return redirect()->route('admin_home');
    }

    public function faqCreate(){
        return view('admin.faqCreator');
    }

    public function faqStore(Request $request) {
        $dados = new faq;
        $dados->pergunta = $request->pergunta;
        $dados->resposta = $request->resposta;
        $dados->save();
        return redirect()->route('admin_about_us');
    }

    public function faqEditor($id) {
        $dados = faq::findorfail($id);
        return view('admin.faqEditor', [
            'dados' => $dados
        ]);
    }
    public function faqUpdate(Request $request, $id) {
        $dados = faq::find($id);
        $dados->id = $id;
        $dados->pergunta = $request->pergunta;
        $dados->resposta = $request->resposta;

        $dados->save();
        return redirect()->route('admin_about_us');
    }
    public function faqDelete($id) {
        $faq = faq::find($id);
        $faq->delete();
        return redirect()->route('admin_about_us');
    }




    public function commentCreate(){
        return view('admin.CommentCreator');
    }

    public function commentStore(Request $request) {
        $dados = new Comment;
        $dados->nome = $request->nome;
        $dados->ocupacao = $request->ocupacao;
        $dados->icone = $request->icone;
        $dados->frase = $request->frase;
        $dados->save();
        return redirect()->route('admin_home');
    }

    public function commentEditor($id) {
        $dados = comment::findorfail($id);
        return view('admin.commentEditor', [
            'dados' => $dados
        ]);
    }
    public function commentUpdate(Request $request, $id) {
        $dados = comment::find($id);
        $dados->id = $id;
        $dados->nome = $request->nome;
        $dados->ocupacao = $request->ocupacao;
        $dados->icone = $request->icone;
        $dados->frase = $request->frase;
        $dados->save();
        return redirect()->route('admin_home');
    }
    public function commentDelete($id) {
        $comment = comment::find($id);
        $comment->delete();
        return redirect()->route('admin_home');
    }










}

