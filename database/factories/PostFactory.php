<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => $this->faker->sentence(10),
        'body' => $this->faker->paragraph(5),
        'image' => $this->faker->imageUrl(400,400),
    ];
});


