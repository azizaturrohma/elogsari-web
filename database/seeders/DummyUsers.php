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
            'email' => 'azizaturrohmablt234@gmail.com',
            'password' => bcrypt('lalalala'),
        ];

        User::create($userData);
    }
}
