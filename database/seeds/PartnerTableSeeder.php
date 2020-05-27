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
            'image' => 'https://github.com/araujoblucas/Projeto-Laravel-2019-12/blob/master/storage/app/public/img/defaults/599x500.jpg?raw=true',
            'facebook' => '#',
        ]);
        Partner::create([
            'name'=>'nome2',
            'ocupation'=> 'ocupação2',
            'image' => 'https://github.com/araujoblucas/Projeto-Laravel-2019-12/blob/master/storage/app/public/img/defaults/599x500.jpg?raw=true',
            'linkedin' => '#',
        ]);
        Partner::create([
            'name'=>'nome2',
            'ocupation'=> 'ocupação2',
            'image' => 'https://github.com/araujoblucas/Projeto-Laravel-2019-12/blob/master/storage/app/public/img/defaults/599x500.jpg?raw=true',
            'pinterest' => '#',
        ]);

    }
}
