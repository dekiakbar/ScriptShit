<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class LembabS extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lembabS', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tanaman_id')->unsigned();
            $table->string('lembabS1');
            $table->string('lembabS2');
            $table->string('lembabS3');
            $table->string('lembabN');
            $table->timestamps();
        });

        Schema::table('lembabS', function(Blueprint $t){
            $t->foreign('tanaman_id')->references('id')->on('tanaman')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lembabS');
    }
}
