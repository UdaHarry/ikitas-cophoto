<?php

use Faker\Generator as Faker;

$factory->define(App\ScAboutBest::class, function (Faker $faker) {
    static $i = 0;
    $title = array('Expert Technicians','Professional Service','Great Support',
                   'Technical Skills','Highly Recomended','Positive Reviews',
    );
    return [
        'title'  => $title[$i++],
        'deskripsi' => 'Usage of the Internet is becoming more common due to rapid advancement of technology and power.',
    ];
});
