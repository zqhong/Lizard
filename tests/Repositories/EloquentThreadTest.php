<?php
use Lizard\Models\Thread;
use Lizard\Repositories\ThreadInterface;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Support\Collection;

/**
 * Created by PhpStorm.
 * User: zqhong
 * Date: 2016/9/4
 * Time: 16:15
 */
class EloquentThreadTest extends TestCase
{
    use DatabaseMigrations;

    public function testIndex()
    {
        factory(Thread::class, 20)->create();
        $target = $this->app->make(ThreadInterface::class);
        $expected = new Collection(array_reverse(range(11, 20, 1)));
        $actual = $target->index(1, 10)->pluck('id');

        $this->assertEquals($expected, $actual);
    }

    public function testBySlug()
    {

    }

    public function testByTag()
    {

    }
}
