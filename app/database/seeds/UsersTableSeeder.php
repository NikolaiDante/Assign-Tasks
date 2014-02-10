<?php

class UsersTableSeeder extends Seeder
{

    public function run()
    {
        User::truncate();

        User::create([

            'username' => 'nikolai',
            'email' => 'nikolai@example.com',
            'password' => '1234'

            ]);
 User::create([

     'username' => 'lorel',
     'email' => 'lorel@example.com',
     'password' => '1234'

     ]);
    }

}
