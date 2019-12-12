<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    return [
        'name' => $faker->randomElement(['Drama','Romance','Comedy','Autobiography','Mystery','Biography','Sci fi',
            'Poem','Diary','Memoir','Short story','Thriller'])
    ];
});
