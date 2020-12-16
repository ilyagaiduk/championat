<?php


namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $name = [
            'Андрей', 'Марсель', 'Роберт', 'Максим', 'Евгений', 'Дмитрий'
        ];
        for($x = 0; $x<=15; $x++) {
            DB::table('members')->insert([
                'name' => $name[mt_rand(0, 5)],
                'email' => $x . '@gmail.com',
                'age' => mt_rand(18, 21),
            ]);
        }
    }
}
