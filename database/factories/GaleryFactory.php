<?php

use Faker\Generator as Faker;

$factory->define(App\ScGaleri::class, function (Faker $faker) {
    static $number = 1;
    static $number2 = 0;
    if($number2 == 3){
        $number2 = 0;
    }
    return [
        'foto'  => 'img/gallery/gallery-'.$number++.'.jpg',
        'label' => 'test '.$number2,
        'quote' => 'Speading Peace To The World '.$number2++,
    ];
});
