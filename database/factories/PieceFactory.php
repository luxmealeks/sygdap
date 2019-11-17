<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Piece::class, function (Faker $faker) {
    return [
        'nompiece' => $faker->word,
        'img' => $faker->word,
        'uuid' => $faker->uuid,
        'prestataires_id' => function () {
            return factory(App\Prestataire::class)->create()->id;
        },
    ];
});
