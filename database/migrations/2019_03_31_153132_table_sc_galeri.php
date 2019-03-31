<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableScGaleri extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scGaleri', function(Blueprint $table){
            $table->increments('id');    
            $table->string('foto');    
            $table->string('label');    
            $table->string('quote');      
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
        Schema::drop('scGaleri');
    }
}
