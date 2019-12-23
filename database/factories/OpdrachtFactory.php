<?php

use Faker\Generator as Faker;

$factory->define(App\Opdracht::class, function (Faker $faker) {
    return [
        'cateraar_id' => 0, 
        'naam' => $faker->name, 
        'omschrijving' => $faker->realText($faker->numberBetween(10,20)), 
        'oplever_datum' => $faker->dateTime($max = 'now', $timezone = null)
});
