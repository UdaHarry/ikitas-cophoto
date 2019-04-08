<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'ikitas',
            'email' => 'ikitas@gmail.com',
            'password' => bcrypt('ikitas'),
            'foto'  => 'img/testimonials/test-1.png'
        ]);
    }
}
