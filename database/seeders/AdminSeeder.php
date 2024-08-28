<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Yesha Kaniyawala',
            'email' => 'kaniyawalayesha@gmail.com',
            'password' => '$2y$10$xR/g7vyfTZCkgxpoE4raDuG/D46NqvAY7LOEjKcRawHtvqefYovIS', // password
        ]);
        $user->assignRole('category');
    }
}
