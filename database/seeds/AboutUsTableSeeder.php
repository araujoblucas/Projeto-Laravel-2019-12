<?php

use Illuminate\Database\Seeder;
use App\AboutUs;
class AboutUsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AboutUs::create([
        'id' => '1',
        'titulo' => 'About Us',
        'subtitulo'=>'STORY ABOUT OUR FIRM',
        'titulo2'=>'ABOUT ATTORNA',
        'subtitulo2'=>'Our Gorgeous History',
        'sobre' =>'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows.
One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections. The bedding was hardly able to cover it.',
        'video'=>'https://www.youtube.com/embed/RiBzfSUGWtw',
        'dado1'=>'OUR PHILOSOPHY',
        'descdado1'=>' A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.',
        'dado2'=>'OUR PRINCIPLE',
        'descdado2'=>'A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.',
        'dado3'=>'KEY OF SUCCESS',
        'descdado3'=>'A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.',
        'imagemdesc'=>'http://www.firamoralanova.cat/wp-content/uploads/2017/02/2-1518x499.png',
        'titulo3'=>'WHAT WE ARE EXPERT AT',
        'subtitulo3' => 'Why Clients Choose Us?',
        'descesq' =>'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookm arksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place.',
        'descdir' =>'A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine.',
        'estatistica1'=>'1000+',
        'descestatistica1'=>'Client Consultations',
        'estatistica2'=>'95%',
        'descestatistica2'=>'Successful Cases',
        'estatistica3'=>'10',
        'descestatistica3'=>'Recovered cost for clients',
        'estatistica4'=>'30+',
        'descestatistica4'=>'Professional Attorneys',
        'imagemfaq'=>'',
        'ask1'=>'What do you get for your attorney’s fee?',
        'answer1'=>'One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections. The bedding was hardly able to cover it and seemed ready to slide off any moment. His many legs, pitifully thin compared with the size of the rest of him, waved about helplessly as he looked. “What’s happened to me?” he thought. It wasn’t a dream. His room, a proper human.',
        'ask2'=>'How long is the statute of limitations to file suit for a New York personal injury case?',
        'answer2'=>'One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections. The bedding was hardly able to cover it and seemed ready to slide off any moment. His many legs, pitifully thin compared with the size of the rest of him, waved about helplessly as he looked. “What’s happened to me?” he thought. It wasn’t a dream. His room, a proper human.',
        'ask3'=>'What information do you need from me in order to get started?',
        'answer3'=>'One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections. The bedding was hardly able to cover it and seemed ready to slide off any moment. His many legs, pitifully thin compared with the size of the rest of him, waved about helplessly as he looked. “What’s happened to me?” he thought. It wasn’t a dream. His room, a proper human.',
        'ask4'=>'What types of injury cases does your firm work on?',
        'answer4'=>'One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections. The bedding was hardly able to cover it and seemed ready to slide off any moment. His many legs, pitifully thin compared with the size of the rest of him, waved about helplessly as he looked. “What’s happened to me?” he thought. It wasn’t a dream. His room, a proper human.',
        'ask5'=>'What is my personal injury or insurance claim worth?',
        'answer5'=>'One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections. The bedding was hardly able to cover it and seemed ready to slide off any moment. His many legs, pitifully thin compared with the size of the rest of him, waved about helplessly as he looked. “What’s happened to me?” he thought. It wasn’t a dream. His room, a proper human.',
        'ask6'=>'On average, how long does it take before a settlement/trial is reached?',
        'answer6'=>'One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections. The bedding was hardly able to cover it and seemed ready to slide off any moment. His many legs, pitifully thin compared with the size of the rest of him, waved about helplessly as he looked. “What’s happened to me?” he thought. It wasn’t a dream. His room, a proper human.',
        'imagemcontato'=>'https://fishtailrace.com/wp-content/uploads/2019/10/Fishtail-Race-Footer_Fooer-Graphics-1800x826.png',
        'titulocontato'=>'ARE YOU LOOKING FOR SOMEONE TO HELP?',
        'telefone'=>'(1)2345-2345-54',
        'email'=>'Contact@Attornasite.co',
        'atendimento'=>'Mon – Fri 09:00-17:00',
        ]);
    }
}
