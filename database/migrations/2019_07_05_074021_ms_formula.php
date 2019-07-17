<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MsFormula extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ms_formula', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('code',20); 
            $table->string('name',255)->default('');
            $table->string('value',100)->default('');
            $table->string('source',100)->default('');
            $table->text('formula');
            $table->integer('level')->default(0);
            $table->text('desc');
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
        //
    }
}
