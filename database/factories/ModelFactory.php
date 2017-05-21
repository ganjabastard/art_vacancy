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

/**
 * Генерация вакансий
 */
    $factory->define(App\Models\Vacancy::class, function (Faker\Generator $faker) {
        return [
            'title'           => $faker->name,
            'active'         => 1,
            'user_id'        => 1,
            'description'    => $faker->text(50),
            'status'         => rand(1,4),
            'experience'     => rand(0, 5),
        ];
    });

/**
 * Генерация резюму
 */
    $factory->define(App\Models\Resume::class, function (Faker\Generator $faker) {
        return [
            'email'          => $faker->email,
            'status'         => rand(1,4),
            'user_id'        => 1,
            'name'           => $faker->name,
            'description'    => $faker->text(50),
            'birthday'       => $faker->dateTimeBetween('-30 years', 'now'),
            'experience'     => rand(0, 5),
            'education'      => rand(1,5),
            'university'     => $faker->text(50),
            'phone'          => rand(10000000, 99999999),
            'link'           => $faker->text(50),
            'position'       => $faker->text(50),
            'source'         => $faker->text(50)
        ];
    });

