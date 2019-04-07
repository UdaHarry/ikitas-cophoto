<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ScAboutTeamSeeder::class);
        // $this->call([
        //     UsersTableSeeder::class,
        //     PrDefaultTopSeeder::class,
        //     PrDefaultOtherSeeder::class,
        //     ScKontakSeeder::class,
        //     ScGaleriSeeder::class,
        //     ScGaleryLabelSeeder::class,
        //     ScServiceSeeder::class,
        //     ScAboutSambutanSeeder::class,
        //     ScAboutBestSeeder::class,
        //     ScAboutTeamSeeder::class
        // ]);
    }
}
