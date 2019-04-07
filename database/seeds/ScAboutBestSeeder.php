<?php

use Illuminate\Database\Seeder;

class ScAboutBestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\ScAboutBest::class, 6)->create();
    }
}
