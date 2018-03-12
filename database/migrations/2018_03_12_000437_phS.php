<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PhS extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phS', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_tanaman')->unsigned();
            $table->string('phS1');
            $table->string('phS2');
            $table->string('phS3');
            $table->string('phN');
            $table->timestamps();
        });

        Schema::table('phS', function(Blueprint $t){
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
        Schema::dropIfExists('phS');
    }
}
