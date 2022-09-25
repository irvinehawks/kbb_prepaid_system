<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'             => 1,
                'name'           => 'Admin',
                'email'          => 'irvenehawks@gmail.com',
                'password'       => bcrypt('Irvine0153'),
                'remember_token' => null,
            ],
            [
                'id'             => 2,
                'name'           => 'Cashier',
                'email'          => 'sangie@gmail.com',
                'password'       => bcrypt('sangie1996'),
                'remember_token' => null,
            ],

            [
                'id'             => 3,
                'name'           => 'MeterReader',
                'email'          => 'wadzie@gmail.com',
                'password'       => bcrypt('wadzie2016'),
                'remember_token' => null,
            ],
        ];

        User::insert($users);
    }
}
