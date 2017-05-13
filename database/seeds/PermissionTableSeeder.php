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
                    'name'         => 'vacancy',
                    'display_name' => 'Вакансии',
                    'description'  => 'Доступ к созданию/редактированию раздела вакансий',
                ],
                [
                    'name'         => 'resume',
                    'display_name' => 'Резюму',
                    'description'  => 'Доступ к созданию/редактированию раздела резюму',
                ],
                [
                    'name'         => 'interview',
                    'display_name' => 'Собеседования',
                    'description'  => 'Доступ к созданию/редактированию раздела собеседования',
                ],
                [
                    'name'         => 'archive',
                    'display_name' => 'Архив',
                    'description'  => 'Доступ к созданию/редактированию раздела архив',
                ],
            ];

            foreach ($permission as $key => $value) {
                Permission::create($value);
            }
        }
    }
