<?php

use Illuminate\Database\Seeder;

class ThreadsTableSeeder extends Seeder
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
            $body = $faker->text;
            $data[] = [
                'title' => $faker->sentence(),
                'body' => $body,
                'original_body' => $body,
                'user_id' => 1,
                'reply_count' => 0,
                'last_reply_user' => 1,
            ];
        }

        DB::table('threads')->insert($data);
    }
}
