<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrPotongan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tr_potongan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nip');
            $table->string('potg_bpjs');
            $table->string('potg_restitusi');
            $table->string('potg_taspen');
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
        Schema::dropIfExists('tr_potongan');
    }
}
