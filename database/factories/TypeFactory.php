<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Type::class, function (Faker $faker) {
    return [
        'libelle' => $faker->word,
        'uuid' => $faker->uuid,
        'prestataires_id' => function () {
            return factory(App\Prestataire::class)->create()->id;
        },
    ];
});
