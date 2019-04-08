<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableScAboutTeam extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scAboutTeam', function(Blueprint $table){
            $table->increments('id');    
            $table->string('foto');     
            $table->string('nama');   
            $table->string('jobdesk');    
            $table->string('facebook')->nullable();     
            $table->string('instagram')->nullable();    
            $table->string('twitter')->nullable();    
            $table->string('linkedin')->nullable();     
            $table->timestamps();       
         });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('scAboutTeam');
    }
}
