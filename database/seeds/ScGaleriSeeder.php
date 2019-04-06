<?php

use Illuminate\Database\Seeder;

class ScGaleriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\ScGaleri::class, 12)->create();
    }
}
