<?php

use Faker\Generator as Faker;

$factory->define(App\Project::class, function (Faker $faker) {
    return [
    	'slug' => str_slug($faker->text(25), '-'),
        'title' => $faker->text(50),
        'summary' => $faker->text(256),
        'description' => $faker->text(256)
    ];
});
