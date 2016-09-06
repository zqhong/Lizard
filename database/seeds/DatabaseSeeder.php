<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Lizard\Models\Thread;
use Lizard\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        factory(User::class, 10)->create();
        factory(Thread::class, 50)->create();
    }
}
