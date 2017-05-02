<?php

    use Illuminate\Database\Seeder;
    use App\Permission;

    class PermissionTableSeeder extends Seeder
    {
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run()
        {
            $permission = [
                [
                    'name'         => 'users',
                    'display_name' => 'Пользователи',
                    'description'  => 'Полный доступ к управлению пользователями.',
                ],
                [
                    'name'         => 'roles',
                    'display_name' => 'Роли',
                    'description'  => 'Полный доступ к управлению ролями.',
                ],
                [
                    'name'         => 'permissions',
                    'display_name' => 'Права доступа',
                    'description'  => 'Неограниченное управление правами доступа.',
                ],
                [
                    'name'         => 'products',
                    'display_name' => 'Кредитные продукты',
                    'description'  => 'Доступ к созданию/редактированию кредитных продуктов',
                ],
            ];

            foreach ($permission as $key => $value) {
                Permission::create($value);
            }
        }
    }
