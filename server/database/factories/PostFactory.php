<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Models\Post;
use App\User;
use Illuminate\Support\Str;
use Faker\Generator as Faker;


$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => $faker->realText,
        'user_id' => factory(User::class)->create()->id,
        'content' => $faker->realText,
        'is_public' => $faker->boolean,
    ];
});