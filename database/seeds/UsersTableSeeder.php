<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        $data = [];

        $nickname = 'test_';
        foreach (range(1, 25) as $index) {
            $data[] = [
                'username' => $faker->name,
                'nickname' => sprintf('%s%s', $nickname, $index),
                'email' => $faker->email,
                'password' => bcrypt('admin'),
                'avatar_url' => '/images/avatar.png',
                'bio' => $faker->text(25),
                'signature' => $faker->text(25),
            ];
        }
        DB::table('users')->insert($data);
    }
}
