<?php

use Illuminate\Database\Seeder;

class ScKontakSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sckontak')->insert([
            'maps'    => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.960448395582!2d110.38979251477349!3d-7.013934494933549!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708b08ecae27d3%3A0xbca7db646419b713!2sIKITAS+3+Menoreh!5e0!3m2!1sid!2sid!4v1554021094786!5m2!1sid!2sid" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>',
            'home'     => 'IKITAS 3 Menoreh A, Jl. Menoreh I No.35, Sampangan, Gajahmungkur, Semarang City, Central Java 50232',
            'email'     => 'contact@ikitas.com',
            'telepon'     => '(021) 123 3345',
            'whatsapp'     => '0851 3456 7890',
        ]);
    }
}
