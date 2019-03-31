<?php

use Faker\Generator as Faker;

$factory->define(App\ScGaleri::class, function (Faker $faker) {
    return [
        'foto'  => 'img/gallery/gallery-2.jpg',
        'label' => 'test1',
        'quote' => 'Speading Peace To The World',
    ];
});
