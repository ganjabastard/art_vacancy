<?php

use App\Models\Vacancy;
use Illuminate\Database\Seeder;

class VacancyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Vacancy::class, 5)->create();
    }
}
