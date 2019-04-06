<?php

use Faker\Generator as Faker;

$factory->define(App\ScGaleriLabel::class, function (Faker $faker) {
    static $number = 1;
    return [
        'label' => 'test '.$number++,
    ];
});
