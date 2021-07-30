<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */



$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'username' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'lastname' => null,
        'firstname' => null,
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Employee::class, function (Faker\Generator $faker) {
    
    return [
        'lastname' => $faker->lastName,
        'gender' => "Male",
        'firstname' => $faker->firstName,
        'email' => $faker->safeEmail,
        'position' => "Programmer",
        
    ];
});