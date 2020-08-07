<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Author;
use App\Book;
use Faker\Generator as Faker;

$factory->define(Book::class, function (Faker $faker) {

    /* $authors = Author::all(); */

    return [
        'author_id' => factory(\App\Author::class),
        /* 'author_id' => $authors->random()->id, */
        'title' => $faker->sentence,
        'year' => $faker->year,
        'argument' => $faker->paragraph,
        'isbn' => $faker->isbn13
    ];
});
