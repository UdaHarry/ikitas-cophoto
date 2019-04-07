<?php

use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(App\ScAboutTeam::class, function (Faker $faker) {
    static $i = 1;
    return [
        'foto'      => 'img/blog/c'.$i++.'.jpg',
        'nama'      => $faker->name,
        'jobdesk'   => 'Photograper',
        'facebook'  => 'facebook.com',
        'instagram' => 'instagram.com',
        'twitter'   => 'twitter.com',
        'linkedin'  =>  'linkedin.com'
    ];
});
