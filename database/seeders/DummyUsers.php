<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUsers extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            'username' => 'Ziza',
            'email' => 'ziza@gmail.com',
            'password' => bcrypt('1234'),
        ];

        User::create($userData);
    }

    //php artisan db:seed --class=DummyUsers
}
