<?php

use Faker\Generator as Faker;

$factory->define(App\ScService::class, function (Faker $faker) {
    static $i = 0;
    $icon = array('<i class="lnr lnr-camera"></i>','<i class="lnr lnr-picture"></i>','<i class="lnr lnr-camera-video"></i>',
                  '<i class="lnr lnr-film-play"></i>','<i class="lnr lnr-eye"></i>','<i class="lnr lnr-bullhorn"></i>',
    );
    $service = array('Photography','Image Maipulation','Videography',
                     'Cinematography','Pro Photoshoot','Digital Media',
    );
    return [
        'icon'  => $icon[$i],
        'service' => $service[$i++],
        'keterangan' => 'Usage of the Internet is becoming more common due to rapid advancement of technology and power. ',
    ];
});
