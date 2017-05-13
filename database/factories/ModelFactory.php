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

    $factory->define(App\Models\Vacancy::class, function (Faker\Generator $faker) {
        return [
            'title'           => $faker->name,
            'active'         => 1,
            'user_id'        => 1,
            'description'    => $faker->text(50),
            'status'         => rand(1,4),
            'age_start'      => rand (16,20),
            'age_end'        => rand (20,60),
            'experience'     => rand(0, 5),
        ];
    });

