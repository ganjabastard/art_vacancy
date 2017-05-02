<?php

use Illuminate\Database\Seeder;
use App\Role;
class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            [
                'name' => 'admin',
                'display_name' => 'Администратор',
                'description' => 'Полный доступ'
            ]
        ];
        foreach ($roles as $key => $value) {
            $role = Role::create($value);
            $role->permissions()->sync([1,2,3,4]);
        }
    }
}
