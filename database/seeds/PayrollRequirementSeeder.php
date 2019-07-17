<?php

use Illuminate\Database\Seeder;

class PayrollRequirementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('ms_staff_payroll_requirement')->insert([
            'nip' => "ANANDA003",
            'golongan_masa_kerja' => "1A-00",
            'ptkp' => "TK",
        ]);

        DB::table('ms_staff_payroll_requirement')->insert([
            'nip' => "ANANDA001",
            'golongan_masa_kerja' => "1B-03",
            'ptkp' => "KW",
        ]);

        DB::table('ms_staff_payroll_requirement')->insert([
            'nip' => "ANANDA002",
            'golongan_masa_kerja' => "4D-32",
            'ptkp' => "KW",
        ]);


    }
}
