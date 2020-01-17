<?php

use Illuminate\Database\Seeder;
use App\Partner;
class PartnerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Partner::create([
            'name'=>'nome1',
            'ocupation'=> 'ocupação1',
            'image' => 'https://osegredo.com.br/wp-content/uploads/2017/06/10-Sinais-de-que-voc%C3%AA-%C3%A9-uma-pessoa-seletiva-830x450.jpg',
            'facebook' => '#',
        ]);
        Partner::create([
            'name'=>'nome2',
            'ocupation'=> 'ocupação2',
            'image' => 'https://www.jrmcoaching.com.br/wp-content/uploads/2017/03/Ego-inflado.png',
            'linkedin' => '#',
        ]);
        Partner::create([
            'name'=>'nome2',
            'ocupation'=> 'ocupação2',
            'image' => 'https://mega.ibxk.com.br///2016/06/24/24150552292198.jpg?w=1200&h=480&mode=crop',
            'pinterest' => '#',
        ]);

    }
}
