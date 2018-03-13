<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' =>'leonardo',
            'email'=>'leo@gmail.com',
            'password'=>bcrypt('leo')
        ]);
    }
}
