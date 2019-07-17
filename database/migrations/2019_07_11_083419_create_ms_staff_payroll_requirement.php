<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMsStaffPayrollRequirement extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ms_staff_payroll_requirement', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("nip");
            $table->string("golongan_masa_kerja");
            $table->string("ptkp");
            $table->string("region");

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
        Schema::dropIfExists('ms_staff_payroll_requirement');
    }
}
