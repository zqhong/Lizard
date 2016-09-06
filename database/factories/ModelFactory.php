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

use Lizard\Models\User;
use Lizard\Models\Thread;

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
        'node_id' => 1,
        'reply_count' => 0,
        'last_reply_user' => 1,
    ];
});
