<?php

use Illuminate\Database\Seeder;
use App\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'username'  => 'Admin',
            'email'     => 'tacticshustle@gmail.com',
            'password'  => bcrypt('123456'),
            'lastname'  => 'Abdulqudus',
            'firstname' => 'Shehu'
        ]);
    }
}
