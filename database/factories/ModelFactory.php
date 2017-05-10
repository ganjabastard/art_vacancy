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
            'name'           => $faker->name,
            'email'          => $faker->unique()->safeEmail,
            'password'       => $password ?: $password = bcrypt('secret'),
            'remember_token' => str_random(10),
        ];
    });

    /**
     * Client
     */
    $factory->define(App\Models\Client\Client::class, function (Faker\Generator $faker) {
        static $password;
        $faker      = \Faker\Factory::create('uk_UA');
        $faker->addProvider(new Faker\Provider\uk_UA\PhoneNumber($faker));

        if (rand(0, 100) > 50) {
            $firstName = $faker->firstNameMale;
            $sex = 1;
        } else {
            $firstName = $faker->firstNameFemale;
            $sex = 0;
        }
        $lastName   = $faker->lastName;
        $middleName = $faker->middleName;
        $fullName   = $lastName . ' ' . $firstName . ' ' . $middleName;

        return [
            'lastName'   => $lastName,
            'firstName'  => $firstName,
            'middleName' => $middleName,
            'fullName'   => $fullName,
            'email'      => $faker->unique()->safeEmail,
            'phone'      => $faker->unique()->numberBetween(1111111111, 9999989999),
            'code'       => $faker->unique()->numberBetween(111111111, 999999999),
            'sex'        => $sex,
            'birth_date' => \Carbon\Carbon::create(rand(1950, 2000), rand(1, 3), rand(1, 31), rand(0, 24), rand(0, 59), rand(0, 59))->toDateString(),
            'reg_date'   => date('Y-m-d'),
            'password'   => $password ?: $password = bcrypt('123'),
        ];
    });

