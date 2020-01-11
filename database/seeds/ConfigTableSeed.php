<?php

use Illuminate\Database\Seeder;
use App\ConfigDefault;

class ConfigTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ConfigDefault::create([
        'id' => '1',
        'icone'=> 'upload/logo.png',
        'telefone'=> '(53) 98732-2233',
        'email'=> 'contato@gmail.com',
        'atendimento'=> 'Seg - Sex 09:00 - 17:00',
        'facebook'=> 'https://www.facebook.com/ufpel',
        'linkedin'=> '',
        'pinterest'=> '',
        'twitter'=> '',
        'instagram'=> '',
        'descricaofooter' => 'One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into.',
        'contatolinha1footer' =>'Box 3233',
        'contatolinha2footer' => '1810 Kings Way',
        'contatolinha3footer'=> 'King Street, 5th Avenue, New York',
        ]);
    }
}
