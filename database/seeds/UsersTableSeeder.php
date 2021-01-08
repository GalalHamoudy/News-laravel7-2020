<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = \App\User::create([
            'name' => 'admin',
            'email' => 'kira2000united@gmail.com',
            'bio' => 'kira2000united@gmail.com',
            'password' => Hash::make('kira2000united'),
            'picture' => '1.jpg'
        ]);


        $user->attachRole('admin');


    }
}
