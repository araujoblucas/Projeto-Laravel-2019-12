<?php
use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    public function run()
    {
        for($i = 0; $i < 5; $i++){
            User::create([
                'name' => 'Usuario '.$i,
                'email' => 'usuario'.$i.'@gmail.com',
                'password' => bcrypt('123456789'),
                'image' => 'https://cdn4.iconfinder.com/data/icons/small-n-flat/24/user-alt-512.png'
            ]);
        }
    }
}
