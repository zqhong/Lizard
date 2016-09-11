<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

use Lizard\Models\Node;
use Lizard\Models\Reply;
use Lizard\Models\Section;
use Lizard\Models\Tag;
use Lizard\Models\Taggable;
use Lizard\Models\Thread;
use Lizard\Models\User;

/*
 * User model factory
 */
$factory->define(User::class, function (Faker\Generator $faker) {
    $name = $faker->name;

    return [
        'remember_token' => str_random(10),
        'username' => $name,
        'nickname' => $name,
        'email' => $faker->safeEmail,
        'password' => bcrypt('admin'),
        'avatar_url' => '/images/avatar.png',
        'bio' => $faker->text(25),
        'signature' => $faker->text(25),
    ];
});

/*
 * Thread model factory
 */
$factory->define(Thread::class, function (Faker\Generator $faker) {
    $body = $faker->text;
    $title = $faker->sentence();
    $slug = implode('-', app('pinyin')->convert($title));

    return [
        'title' => $title,
        'slug' => $slug,
        'body' => $body,
        'original_body' => $body,
        'user_id' => 1,
        'node_id' => rand(1, 25),
        'section_id' => rand(1, 25),
        'reply_count' => 0,
        'last_reply_user_id' => 1,
        'created_at' => time(),
        'updated_at' => time(),
    ];
});

/**
 * Reply model factory
 */
$factory->define(Reply::class, function (Faker\Generator $faker) {
    $body = $faker->text;
    $devices = ['iPhone', 'Android', 'web', 'Windows', 'MacOS', 'Linux'];

    return [
        'thread_id' => rand(1, 25),
        'user_id' => 1,
        'original_body' => $body,
        'body' => $body,
        'device_name' => $devices[array_rand($devices)],
        'created_at' => time(),
        'updated_at' => time(),
    ];
});

/**
 * Tag model factory
 */
$factory->define(Tag::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'created_at' => time(),
        'updated_at' => time(),
    ];
});


/**
 * TagThread model factory
 */
$factory->define(Taggable::class, function () {
    return [
        'tag_id' => rand(1, 25),
        'taggable_id' => rand(1, 25),
        'taggable_type' => 'Lizard\Models\Thread',
    ];
});

/**
 * Section model factory
 */
$factory->define(Section::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'created_at' => time(),
        'updated_at' => time(),
    ];
});

/**
 * Node model factory
 */
$factory->define(Node::class, function (Faker\Generator $faker) {
    return [
        'section_id' => rand(1, 25),
        'name' => $faker->name,
        'created_at' => time(),
        'updated_at' => time(),
    ];
});