<?php
/**
 * Created by PhpStorm.
 * User: zqhong
 * Date: 2016/9/4
 * Time: 16:15.
 */
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Support\Collection;
use Lizard\Models\Thread;
use Lizard\Repositories\ThreadInterface;

class EloquentThreadTest extends TestCase
{
    use DatabaseMigrations;

    public function testIndex()
    {
        factory(Thread::class, 20)->create();
        $target = $this->app->make(ThreadInterface::class);

        $expected = new Collection(array_reverse(range(11, 20, 1)));
        $actual = $target->index(10)->pluck('id');
        $this->assertEquals($expected, $actual);

        $expected = new Collection(array_reverse(range(1, 10, 1)));
        $actual = $target->index(10, 2)->pluck('id');
        $this->assertEquals($expected, $actual);
    }

    public function testBySlug()
    {
        $target = $this->app->make(ThreadInterface::class);
        $expected = factory(Thread::class, 1)->create();
        $actual = $target->bySlug($expected->slug);
        $this->assertEquals($expected->body, $actual->body);
    }

    public function testSave()
    {
        // new thread attributes
        $faker = Faker\Factory::create();
        $body = $faker->text;
        $title = $faker->sentence();
        $slug = implode('-', app('pinyin')->convert($title));
        $attributes = [
            'title' => $title,
            'slug' => $slug,
            'body' => $body,
            'original_body' => $body,
            'user_id' => 1,
            'reply_count' => 0,
            'last_reply_user' => 1,
        ];

        $target = $this->app->make(ThreadInterface::class);
        $target->save($attributes);

        $newThread = $target->bySlug($attributes['slug']);
        if (empty($newThread)) {
            $actual = false;
        } else {
            $actual = true;
        }

        $this->assertEquals(true, $actual);
    }

    public function testStore()
    {
        $thread = factory(Thread::class, 1)->create();
        $target = $this->app->make(ThreadInterface::class);

        $attributes = [
            'title' => 'new title',
            'body' => 'new body',
        ];
        $target->store($thread->slug, $attributes);

        $newThread = $target->bySlug($thread->slug);
        $this->assertEquals($newThread->title, $attributes['title']);
        $this->assertEquals($newThread->body, $attributes['body']);
    }

    public function testByUser()
    {
    }

    public function testDelete()
    {
    }

    public function testByTag()
    {
    }
}
