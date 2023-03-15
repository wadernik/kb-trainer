<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

final class UsersTableSeeder extends Seeder
{
    public function run(): void
    {
        $items = [
            [
                'id' => 1,
                'first_name' => 'Илья',
                'last_name' => 'Закарая',
                'username' => 'ilia',
                'password' => bcrypt('123123'), // password
                'email' => 'chill@stroman.org',
                'phone' => '79111111111',
            ],
            [
                'id' => 2,
                'first_name' => 'Александр',
                'last_name' => 'Столяров',
                'username' => 'stolyar',
                'password' => bcrypt('123123'), // password
                'email' => 'admin@aidadev.ru',
                'phone' => '79111111112',
            ],
            [
                'id' => 3,
                'first_name' => 'Павел',
                'username' => 'pavel',
                'password' => bcrypt('123123'), // password
                'email' => 'freepzu@gmail.com',
                'phone' => '79111111115',
            ],
        ];

        foreach ($items as $item) {
            User::query()->firstOrCreate(['id' => $item['id']], $item);
        }
    }
}
