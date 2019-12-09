<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Book;
use App\Borrow;
use Faker\Generator as Faker;

$factory->define(Borrow::class, function (Faker $faker) {
    return [
        'issueDate' => $faker->date('Y-m-d'),
        'dueDate' => $faker->date('Y-m-d'),
        'returned' => 0,
        'bookId' => factory(\App\Book::class)->create(),
        'userId' => factory(\App\User::class)->create(),
    ];
});
