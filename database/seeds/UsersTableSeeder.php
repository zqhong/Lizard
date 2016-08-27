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

        foreach (range(1, 50) as $index) {
            $item = [
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => bcrypt('admin'),
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
            ];
            if (1 === $index) {
                $item['email'] = 'admin@lizard.app';
            }
            $data[] = $item;
        }
        DB::table('users')->insert($data);
    }
}
