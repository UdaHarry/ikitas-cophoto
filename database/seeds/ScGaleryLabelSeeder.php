<?php

use Illuminate\Database\Seeder;

class ScGaleryLabelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\ScGaleriLabel::class, 3)->create();
    }
}
