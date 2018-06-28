<?php

use Faker\Generator as Faker;


$factory->define(App\Book::class, function (Faker $faker) {
    return [
        'title' => $faker->realText($maxNbChars = 50),
        'author' => $faker->name(),
        'genre' => $faker->randomElement(['Adventure','Horror','Romance','Thriller','Fantasy','Sci-Fi']),
        'library_section' => $faker->randomElement(['Circulation','Periodical Section','General Reference',"Children's Section",'Fiction']),
        'imageURL' => $faker->unique()->numberBetween($min = 1, $max = 100).".jpg",
        'timesBorrowed' => $faker->numberBetween($min = 1, $max = 10),
    ];
});


