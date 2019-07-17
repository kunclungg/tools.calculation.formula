<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrmPtkp extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prm_ptkp', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('code');
            $table->string('ket');
            $table->string('jrp');
            $table->string('tji');
            $table->string('tja');
            $table->string('jml');
            $table->string('tjb');
            $table->string('tjk');
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
        Schema::dropIfExists('prm_ptkp');
    }
}
