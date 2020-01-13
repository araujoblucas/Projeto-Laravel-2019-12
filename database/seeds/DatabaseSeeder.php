<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //$this->call('AboutTeamTableSeeder');
        //$this->call('ContactTableSeeder');
        //$this->call('AboutUsTableSeeder');
        //$this->call('GalleryTableSeeder');
        //$this->call('PriceTableTableSeeder');
        //$this->call('ConfigTableSeed');
        //$this->call('BlogTableSeeder');
        //$this->call('UserTableSeeder');
        $this->call('ImagemTableSeeder');
    }
}
