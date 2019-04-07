<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableScSambutan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scSambutan', function(Blueprint $table){
            $table->increments('id');    
            $table->string('img_sambutan');    
            $table->string('title');
            $table->text('deskripsi');      
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
        Schema::drop('scSambutan');
    }
}
