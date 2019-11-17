<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\PermissionRole::class, function (Faker $faker) {
    return [
        'permission_id' => function () {
            return factory(App\Permission::class)->create()->id;
        },
        'role_id' => function () {
            return factory(App\Role::class)->create()->id;
        },
    ];
});
