<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Book;
use Faker\Generator as Faker;

$factory->define(Book::class, function (Faker $faker) {
    return [
        'title' => $faker->randomElement(['Desert Solitaire','Disgrace','Gilead','Giovannis Room','
Infinite Jest','Lolita','Maus','Things Fall Apart','To Kill a Mockingbird
','Where the Wild Things Are']),
        'published' => $faker->date('Y-m-d'),
        'cat_id' => \App\Category::all()->random()->id,
    ];
});
