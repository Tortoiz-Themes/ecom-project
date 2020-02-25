<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(\App\Models\Product::class, function (Faker $faker) {
    return [
        'category_id'   => rand(1, 10),
        'brand_id'      => rand(1, 10),
        'title'         => $faker->name.'-'.rand(1, 9),
        'slug'          => Str::slug($faker->name),
        'description'   => $faker->realText(),
        'unit'          => 'kg',
        'price'         => rand(100, 1000),
        'sales_price'   => rand(100, 1000),
        'ratings'       => rand(3, 5),
        'quantity'      => rand(3, 10),
    ];
});
