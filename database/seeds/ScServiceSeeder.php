<?php

use Illuminate\Database\Seeder;

class ScServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\ScService::class, 6)->create();
    }
}
