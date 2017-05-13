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
            'age_start'      => rand (16,20),
            'age_end'        => rand (20,60),
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
            'vacancy_id'     => \App\Models\Vacancy::inRandomOrder()->first()->id,
            'user_id'        => 1,
            'name'           => $faker->name,
            'description'    => $faker->text(50),
            'birthday'       => $faker->dateTimeBetween('-30 years', 'now'),
            'experience'     => rand(0, 5),
            'education'      => rand(1,5),
            'university'     => $faker->text(50),
        ];
    });

