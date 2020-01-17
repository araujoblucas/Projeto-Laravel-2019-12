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
            'imagem' => 'https://d4kkpd69xt9l7.cloudfront.net/sys-master/root/hb1/h77/8939926519838/nommo-gallery-1500x1000-1.jpg',
            'dado1' => '1000+',
            'descdado1' => 'Client Consultations',
            'dado2' => '10mIns',
            'descdado2' => 'Recovered cost for clients',
            'dado3' => '95%',
            'descdado3' => 'Successful Cases',
            'dado4' => '30+',
            'descdado4' => 'Professional Attorneys',
            'contatoTitulo' => 'WE ARE LOOKING FOR NEW PARTNERS',
            'contatodesc' => 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.',
        ]);
    }
}
