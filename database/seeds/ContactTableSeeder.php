<?php

use Illuminate\Database\Seeder;
use App\Contact;

class ContactTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Contact::create([
            'id' =>'1',
            'titulo' =>'Contato',
            'subtitulo' =>'Entre em Contato',
            'imagem' => '',
            'telefone' =>'(51) 99733-9384',
            'desctelefone' =>'A wonderful serenity has taken possession of my entire soul, like these.',
            'email' =>'contato@entremcontato.com',
            'descemail' =>'A wonderful serenity has taken possession of my entire soul, like these.',
            'localizacao' =>'https://goo.gl/maps/S6gG5YNywQHNzkYC6',
            'linklocalizacao' =>'4 apt. Flawing Street. The Grand Avenue.    Liverpool, UK 33342',
            'messagetitulo' =>'Deixe nos sua mensagem',
            'messagedesc' =>'e retornaremos para você',
            'facebook' =>'www.facebook.com/face',
            'google' =>'',
            'skype' =>'',
            'twitter' =>'',
        ]);
    }
}
