<?php
use App\AboutTeam;
use Illuminate\Database\Seeder;

class AboutTeamTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        AboutTeam::create([
            'id' => '1',
            'titulo' => 'About Team',
            'subtitulo' => 'STORY ABOUT OUR TEAM',
            'tituloImagem' => 'WHAT WE ARE EXPERT AT',
            'subtituloImagem' => 'Why Clients Choose Us?',
            'desc1' => 'A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine.',
            'desc2' => 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookm arksgrove right at the coast of the Semantics, a large language ocean. A small river named',
            'imagem' => 'http://www.baltana.com/files/wallpapers-14/4-Elements-Background-Wallpaper-36669.jpg',
            'dado1' => '1000+',
            'descdado1' => 'Client Consultations',
            'dado2' => '10mIns',
            'descdado2' => 'Recovered cost for clients',
            'dado3' => '95%',
            'descdado3' => 'Successful Cases',
            'dado4' => '30+',
            'descdado4' => 'Professional Attorneys',
            'ask1' => 'What do you get for your attorney’s fee?',
            'answer1' => 'What do you get for your attorney’s fee?',
            'ask2' => 'How long is the statute of limitations to file?',
            'answer2' => 'One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections. The bedding was hardly able to cover it and seemed',
            'ask3' => 'What information do you need from me in order to get started?',
            'answer3' => 'One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections. The bedding was hardly able to cover it and seemed',
            'ask4' => 'What types of injury cases does your firm work on?',
            'answer4' => 'One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections. The bedding was hardly able to cover it and seemed',
            'answer5' => 'One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections. The bedding was hardly able to cover it and seemed',
            'ask5' => 'What is my personal injury or insurance claim worth?',
            'video' => 'Pelotas',
            'descVideo' => 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics.',
            'tituloVideo' => 'We won many awards',
            'contatoTitulo' => 'WE ARE LOOKING FOR NEW PARTNERS',
            'contatodesc' => 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.',
        ]);
    }
}
