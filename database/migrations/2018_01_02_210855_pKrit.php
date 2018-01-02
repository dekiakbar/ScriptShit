<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PKrit extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pKrit', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('suhu');
            $table->integer('kelembaban');
            $table->integer('phTanah');
            $table->integer('ketinggian');
            $table->integer('kedalaman');
            $table->integer('ketebalan');
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
        Schema::dropIfExists('pKrit');
    }
}
