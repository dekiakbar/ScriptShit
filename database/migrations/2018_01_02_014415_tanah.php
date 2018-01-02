<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Tanah extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tanah', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_kota')->unsigned();
            $table->string('jenis_tanah');
            $table->integer('ph');
            $table->integer('kedalaman');
            $table->integer('ketebalan');
            $table->timestamps();
        });

        Schema::table('tanah', function (Blueprint $t){
            $t->foreign('id_kota')->references('id')->on('kota')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tanah');
    }
}
