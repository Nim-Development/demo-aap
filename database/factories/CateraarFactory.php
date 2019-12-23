<?php

use Faker\Generator as Faker;

$factory->define(App\Cateraar::class, function (Faker $faker) {
    return [
        'naam' => $faker->name, 
        'regio' => $faker->city
    ];
});
