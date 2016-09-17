<?php

use Illuminate\Database\Seeder;
use Lizard\Models\Node;
use Lizard\Models\Reply;
use Lizard\Models\Section;
use Lizard\Models\Tag;
use Lizard\Models\Taggable;
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

        $threads = factory(Thread::class, 25)->make();
        Thread::insert($threads->toArray());

        $replies = factory(Reply::class, 50)->make();
        Reply::insert($replies->toArray());

        $sections = factory(Section::class, 25)->make();
        Section::insert($sections->toArray());

        $nodes = factory(Node::class, 25)->make();
        Node::insert($nodes->toArray());

        $tags = factory(Tag::class, 25)->make();
        Tag::insert($tags->toArray());

        $taggable = factory(Taggable::class, 50)->make();
        Taggable::insert($taggable->toArray());
    }
}
