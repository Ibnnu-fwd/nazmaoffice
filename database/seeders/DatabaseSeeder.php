<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name'     => 'Admin',
            'email'    => 'itmcnazma@gmail.com',
            'password' => password_hash('Kamunanya2023', PASSWORD_DEFAULT)
        ]);
    }
}
