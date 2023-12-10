<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DummyUsers extends Seeder
{
    public function run(): void
    {
        $userData = [
            'username' => 'Amini',
            'email' => 'aminiwahyudi@gmail.com',
            'password' => bcrypt('1234'),
            'gender' => 'Perempuan',
        ];

        User::create($userData);
    }

    //php artisan db:seed --class=DummyUsers
}
