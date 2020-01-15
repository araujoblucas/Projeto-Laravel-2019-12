<?php

use Illuminate\Database\Seeder;
use App\Home;
class HomeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        Home::create([
           'id' => '1',
            'container1titulo' => 'Bem Vindo',
            'container1subtitulo' => 'a Atorna',
            'container1descricao' => 'Lorem ipsum facilisis ipsum mattis aliquam blandit, lorem ultricies inceptos pretium auctor sem nostra, bibendum varius nunc ullamcorper ut. ',
            'container1imagem' => 'https://images5.alphacoders.com/686/thumb-1920-686000.jpg',
            'container1titulo2' => 'melhor equié',
            'container1subtitulo2' => 'Sempre bem organizada',
            'container1descricao2' => 'Vem vindo',
            'container1imagem2' => 'https://d4kkpd69xt9l7.cloudfront.net/sys-master/root/hb1/h77/8939926519838/nommo-gallery-1500x1000-1.jpg',
            'container2titulo' => 'about atorn',
            'container2descricao' => '	Lorem ipsum facilisis ipsum mattis aliquam blandit, lorem ultricies inceptos pretium auctor sem nostra, bibendum varius nunc ullamcorper ut. tellus condimentum nisi dapibus semper tristique tellus orci velit phasellus, blandit fringilla venenatis eleifend eget mattis mollis aliquam, fusce orci luctus faucibus sociosqu etiam elementum tempus. inceptos et vestibulum vehicula feugiat mauris accumsan habitasse auctor, sociosqu eros neque quisque eros nulla ultricies, nec venenatis amet quis nec amet curae. et per malesuada cursus libero aptent quisque est id, amet sociosqu non euismod interdum erat ante cursus primis, suscipit dui diam lacus lorem senectus neque. ',
            'container2imagem' => 'https://i.pinimg.com/originals/44/3c/1a/443c1a07cad8d15c08321f043d4cc71c.jpg',
            'container3titulo' => 'WHAT WE ARE',
            'container3subtitulo' => 'Legal Practice Area',
            'container3icone1' => 'upload/hp-icon-1.png',
            'container3titulo1' => 'Corporate',
            'container3descricao1' => 'Felis aliquet potenti habitant etiam accumsan non mauris libero nisi non ullamcorper, nam fermentum imperdiet viverra mollis sapien vehicula l',
            'container3icone2' => 'upload/hp-icon-2.png',
            'container3titulo2' => 'Real State',
            'container3descricao2' => 'san habitasse auctor, sociosqu eros neque quisque eros nulla ultricies, nec venenatis amet quis nec amet curae. et per malesuada cursus libero aptent quisque est id, amet sociosqu non euismod interdum erat ante cursus primis, suscipit dui diam lacus lorem senectus neque. ',
            'container3icone3' => 'upload/hp-icon-3.png',
            'container3titulo3' => 'Health Care',
            'container3descricao3' => 'emper. vitae purus lectus iaculis interdum enim congue in tellus, suscipit diam d',
            'container3icone4' => 'upload/hp-icon-4.png',
            'container3titulo4' => 'Insurance Law',
            'container3descricao4' => 'Felis aliquet potenti habitant etiam accumsan non mauris libero nisi non ullamcorper, nam fermentum imperdiet viverra mollis sapien vehicula li',
            'container3icone5' => 'upload/hp-icon-5.png',
            'container3titulo5' => 'Construction',
            'container3descricao5' => '. nullam netus felis ultricies sodales dui aliquam sit adipiscing, a ligula tortor bibendum orci quisque maecenas laoreet, ultrices aenean pulvinar quisque adipiscing mi ',
            'container3icone6' => 'upload/hp-icon-6.png',
            'container3titulo6' => 'ECommerce',
            'container3descricao6' => '	Vel cubilia quam sed scelerisque, sociosqu nam pellentesque. ',
            'container4titulo' => 'Parceiros',
            'container4link' => 'Conheça nossos parceiros',
            'container4imagem' => 'https://images7.alphacoders.com/777/777835.jpg',
            'container5titulo' => 'Nós Servimos o melhor',
            'container5descricao' => 'nteger inceptos enim euismod senectus maecenas blandit tristique non, viverra donec posuere fames mauris congue dolor sollicitudin sociosqu, ac eu sit orci quisque faucibus ut. inceptos habitant amet ultricies vivamus porttitor fames lacus etiam tristique porttitor, consectetur laor',
            'container5icone1' => 'upload/law30.png',
            'container5titulo1' => '2018 WINNING AWARD',
            'container5descricao1' => 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they.',
            'container5background1' => 'https://www.extraclasse.org.br/wp-content/uploads/2018/10/fraga-outubro2018-398x370.jpg',
            'container5icone2' => 'upload/law31.png',
            'container5titulo2' => 'PRIVATE',
            'container5descricao2' => 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they.',
            'container5background2' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQynwyByMrZ_EMDblu_9JM5FN1dfgjCPxYVKjFWLyOEbMNSfL3Y&s',
            'container5icone3' => 'upload/law32.png',
            'container5titulo3' => 'LEGAL PROTECTION',
            'container5descricao3' => 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they.',
            'container5background3' => 'http://rachelsparkes.com/wp-content/uploads/2017/06/Image-1-398x370.png',
            'container6imagem' => 'https://i.redd.it/mvvt7fgvkdc11.jpg',
        ]);

    }
}
