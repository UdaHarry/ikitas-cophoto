<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TablePrDefaultOther extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prDefaultOther',function(Blueprint $table){
            $table->increments('id');
            $table->string('webname');
            $table->string('webicon');
            $table->text('about');
            $table->string('fb');
            $table->string('twit');
            $table->string('ig');
            $table->string('linked');
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
        Schema::drop('prDefaultOther');
    }
}
