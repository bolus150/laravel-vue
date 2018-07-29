<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
            'username'      => 'admin',
            'email'     => 'admin@admin.com',
            'password'  => bcrypt('pass'),
            'birth'     => '1991-05-05',
            'role'      => 1
        ]);

        \App\User::create([
            'username'      => 'user',
            'email'     => 'user@user.com',
            'password'  => bcrypt('pass'),
            'birth'     => '1991-05-05',
            'role'      => 0
        ]);
    }
}
