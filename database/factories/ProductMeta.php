<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Models\ProductMeta::class, function (Faker $faker) {
    return [
        'attr_name'  => $faker->streetName,
        'attr_value'    => $faker->streetAddress
    ];
});
