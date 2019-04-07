<?php

use Illuminate\Database\Seeder;

class ScAboutSambutanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('scsambutan')->insert([
            'img_sambutan'	=> '/img/find-1.jpg',
            'title'         => 'Did not find your Package Feel free to ask us. We‘ll make it for you',
            'deskripsi'     => 'inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially in the workplace. That’s why it’s crucial that, as women, our behavior on the job is beyond reproach. inappropriate behavior is often laughed.'
        ]);
    }
}
