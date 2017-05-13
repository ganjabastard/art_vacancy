<?php

use App\Models\Resume;
use Illuminate\Database\Seeder;

class ResumeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Resume::class, 20)->create();
    }
}
