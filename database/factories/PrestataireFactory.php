<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Prestataire::class, function (Faker $faker) {
    $id_type = \App\Type::all()->random()->id;

    // $id_facture = App\Facture::all()->random()->id;
    // $id_comptable = App\Comptable::all()->random()->id;

    return [
        'ninea' => $faker->word,
        'bp' => $faker->randomNumber(),
        'telephone' => $faker->randomNumber(),
        'fax' => $faker->randomNumber(),
        'email' => $faker->safeEmail,
        'registreCommerce' => $faker->word,
        'uuid' => $faker->uuid,
        'raisonSociale' => $faker->word,
        // 'secteurActivite' => $faker->word,
        'adresse' => $faker->word,
        'dateAgrement' => $faker->date,
       // 'piece' => $faker->image,

        // 'types_id' => $faker->randomNumber(),
//test
         'types_id' => function () use ($id_type) {
             return $id_type;
         },
        // 'factures_id' => function () use ($id_facture) {
        //     return $id_facture;
        // },
        // 'comptables_id' => function () use ($id_comptable) {
        //     return $id_comptable;
        // },
    ];
});
