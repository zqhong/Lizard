<?php

use Illuminate\Database\Seeder;
use Lizard\Models\Tag;
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

        $threads = factory(Thread::class, 50)->make();
        Thread::insert($threads->toArray());

        $tags = factory(Tag::class, 50)->make();
        Tag::insert($tags->toArray());
    }
}
