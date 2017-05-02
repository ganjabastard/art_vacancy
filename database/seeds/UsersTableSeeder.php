<?php

use Illuminate\Database\Seeder;
use App\User;
use Carbon\Carbon;
class UsersTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'admin',
                'password' => Hash::make('123456'),
                'email' => 'admin@example.com',
                'birthdate' => Carbon::now()->format('Y-m-d'),
                'phone' => '0991234567',
                'active' => 1,
            ],
            [
                'name' => 'Anna',
                'password' => Hash::make('artjoker'),
                'email' => 'anna@example.com',
                'birthdate' => Carbon::now()->format('Y-m-d'),
                'phone' => '0991234567',
                'active' => 1,

            ],
        ];
        foreach ($users as $key => $value) {
            $user = User::create($value);
            $user->roles()->sync([1]);
//            $user->attachRole([1]);
        }
    }
}
