<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CurahHujanS extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('curahHujanS', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_tanaman')->unsigned();
            $table->string('curahS1');
            $table->string('curahS2');
            $table->string('curahS3');
            $table->string('curahN');
            $table->timestamps();
        });

        Schema::table('curahHujanS', function(Blueprint $t){
            $t->foreign('id_tanaman')->references('id')->on('tanaman')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('curahHujanS');
    }
}
