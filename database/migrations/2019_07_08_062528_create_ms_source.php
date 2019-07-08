<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMsSource extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ms_source', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('code',20);
            $table->string('table',255)->default('');
            $table->string('key',255)->default('');
            $table->string('fields',255)->default('');
            $table->string('source',255)->default('');
            $table->timestamps();
            $table->string('create_by',100)->default('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ms_source');
    }
}
