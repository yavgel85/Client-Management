<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'             => 1,
                'name'           => 'Admin',
                'email'          => 'admin@admin.com',
                'password'       => '$2y$10$eVlCZTzMKP4BgaMwJqH5mu1CzZVFfdt0cWdUavBs2xncJ.dX1XS/G',
                'remember_token' => null,
            ],
        ];

        User::insert($users);

    }
}
