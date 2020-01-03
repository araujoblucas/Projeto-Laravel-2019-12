<?php

use Illuminate\Database\Seeder;
use app\Link;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call('LinksTableSeeder');
        $this->call('AboutTeamTableSeeder');
        $this->call('ContactTableSeeder');
        $this->call('AboutUsTableSeeder');
    }
}
