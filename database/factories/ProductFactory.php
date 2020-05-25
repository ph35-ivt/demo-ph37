<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Book\Product;
use Faker\Generator as Faker;
use Book\Category;

$factory->define(Product::class, function (Faker $faker) {
	$categoryIDs= Category::pluck('id');
    return [
        'name'=>$faker->name,
        'qty' => rand(1,10),
        'category_id'=> $faker->randomElement($categoryIDs)
    ];
});
