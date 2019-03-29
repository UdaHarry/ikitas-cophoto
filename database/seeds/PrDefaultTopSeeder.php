<?php

use Illuminate\Database\Seeder;

class PrDefaultTopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('prdefaulttop')->insert([
            'gambar_landing'    => 'img/banner/banner-2.jpg',
            'gambar_banner'     => 'img/banner/banner.jpg',
        ]);
    }
}
