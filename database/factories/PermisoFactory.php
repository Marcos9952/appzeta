<?php

use App\Models\admin\Permiso;
use Faker\Generator as Faker;

$factory->define(Permiso::class, function (Faker $faker) {
    return [
        //apuntamos al modelo permiso enviamos los datos aletorio por medio de function faker
        'nombre'=>$faker->word,
        'slog'=>$faker->word,
    ];
});
