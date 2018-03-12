<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SuhuS extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suhuS', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_tanaman')->unsigned();
            $table->string('suhuS1');
            $table->string('suhuS2');
            $table->string('suhuS3');
            $table->string('suhuN');
            $table->timestamps();
        });

        Schema::table('suhuS', function(Blueprint $t){
            $t->foreign('id_tanaman')->references('id')->on('tanaman')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('suhuS');
    }
}
