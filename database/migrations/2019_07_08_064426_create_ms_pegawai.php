<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMsPegawai extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ms_pegawai', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nip',20);
            $table->string('name',255)->default('');
            $table->string('bpjs',255)->default('');
            $table->string('golongan',255)->default('');
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
        Schema::dropIfExists('ms_pegawai');
    }
}
