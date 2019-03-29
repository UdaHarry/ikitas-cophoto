<?php

use Illuminate\Database\Seeder;

class PrDefaultOtherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('prdefaultother')->insert([
            'webname'	=> 'Bitmap Photography',
            'webicon'   => 'img/logo/logo-2.png',
            'about'     => 'If you are looking at blank cassettes on the web, you may be very confused at the difference in price.',
            'fb'        => 'faceebok.com',
            'twit'      => 'twitter.com',
            'ig'        => 'instagram.com',
            'linked'    => 'linkedin.com',
        ]);
    }
}
