<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     	User::create([
            'name' => 'Admin',
            'email' => 'admin@test.com',
            'password' => Hash::make('admin'),
            'role' => 1
        ]);
        User::create([
            'name' => 'student',
            'email' => 'student@test.com',
            'password' => Hash::make('student'),
            'role' => 2
        ]);
    }
}
