<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Book\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    return [
        'name' =>$faker->name,
       
    ];
});
