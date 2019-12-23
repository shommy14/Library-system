<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Book;
use App\Borrow;
use Faker\Generator as Faker;

$factory->define(Borrow::class, function (Faker $faker) {
    return [
        'dueDate' => $faker->date('Y-m-d'),
        'returned' => false,
        'bookId' => \App\Book::all()->random()->id,
        'userId' => \App\User::all()->random()->id,
    ];
});
