<?php

use Illuminate\Database\Seeder;

class FormulaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        DB::table('ms_formula')->insert([
//            'code' => "A",
//            'name' => "A",
//            'value' => "",
//            'source' => "",
//            'formula' => "@B@+@C@+@D@",
//            'level' => 0,
//            'desc' => "desc",
//            'create_by' => "System",
//        ]);
//
//        DB::table('ms_formula')->insert([
//            'code' => "B",
//            'name' => "B",
//            'value' => "",
//            'source' => "",
//            'formula' => "@F@+@G@",
//            'level' => 1,
//            'desc' => "desc",
//            'create_by' => "System",
//        ]);
//
//        DB::table('ms_formula')->insert([
//            'code' => "C",
//            'name' => "C",
//            'value' => "",
//            'source' => "1",
//            'formula' => "",
//            'level' => 2,
//            'desc' => "desc",
//            'create_by' => "System",
//        ]);
//
//        DB::table('ms_formula')->insert([
//            'code' => "D",
//            'name' => "D",
//            'value' => "7500",
//            'source' => "",
//            'formula' => "",
//            'level' => 2,
//            'desc' => "desc",
//            'create_by' => "System",
//        ]);
//
//        DB::table('ms_formula')->insert([
//            'code' => "E",
//            'name' => "E",
//            'value' => "",
//            'source' => "",
//            'formula' => "@B@+@C@+@D@*0.1",
//            'level' => 1,
//            'desc' => "desc",
//            'create_by' => "System",
//        ]);
//
//        DB::table('ms_formula')->insert([
//            'code' => "F",
//            'name' => "F",
//            'value' => "100000",
//            'source' => "",
//            'formula' => "",
//            'level' => 2,
//            'desc' => "desc",
//            'create_by' => "System",
//        ]);
//
//        DB::table('ms_formula')->insert([
//            'code' => "G",
//            'name' => "G",
//            'value' => "3000000",
//            'source' => "",
//            'formula' => "",
//            'level' => 2,
//            'desc' => "desc",
//            'create_by' => "System",
//        ]);
//
//        DB::table('ms_formula')->insert([
//            'code' => "HEX",
//            'name' => "HEX",
//            'value' => "",
//            'source' => "",
//            'formula' => "@GEX@+@A@+@E@-@DEX@",
//            'level' => 2,
//            'desc' => "desc",
//            'create_by' => "System",
//        ]);
//
//        DB::table('ms_formula')->insert([
//            'code' => "GEX",
//            'name' => "GEX",
//            'value' => "",
//            'source' => "1",
//            'formula' => "",
//            'level' => 2,
//            'desc' => "desc",
//            'create_by' => "System",
//        ]);
//
//        DB::table('ms_formula')->insert([
//            'code' => "DEX",
//            'name' => "DEX",
//            'value' => "",
//            'source' => "2",
//            'formula' => "",
//            'level' => 2,
//            'desc' => "desc",
//            'create_by' => "System",
//        ]);

        DB::table('ms_formula')->insert([
            'code' => "PAYROLL",
            'name' => "Payroll",
            'value' => "",
            'source' => "",
            'formula' => "(@GAJI_POKOK@+@TUNJANGAN@)-@POTONGAN@",
            'level' => 0,
            'desc' => "desc",
            'create_by' => "System",
        ]);

        DB::table('ms_formula')->insert([
            'code' => "GAJI_POKOK",
            'name' => "GAJI POKOK",
            'value' => "",
            'source' => "1",
            'formula' => "",
            'level' => 1,
            'desc' => "desc",
            'create_by' => "System",
        ]);

        DB::table('ms_formula')->insert([
            'code' => "TUNJANGAN",
            'name' => "TUNJANGAN",
            'value' => "",
            'source' => "",
            'formula' => "@TJBERAS@+@TJKHUSUS@+@TJKELUARGA@",
            'level' => 0,
            'desc' => "desc",
            'create_by' => "System",
        ]);

        DB::table('ms_formula')->insert([
            'code' => "TJKHUSUS",
            'name' => "TUNJANGAN KHUSUS",
            'value' => "",
            'source' => "3",
            'formula' => "",
            'level' => 1,
            'desc' => "desc",
            'create_by' => "System",
        ]);

        DB::table('ms_formula')->insert([
            'code' => "TJBERAS",
            'name' => "TUNJANGAN BERAS",
            'value' => "",
            'source' => "8",
            'formula' => "",
            'level' => 1,
            'desc' => "desc",
            'create_by' => "System",
        ]);

        DB::table('ms_formula')->insert([
            'code' => "TJKELUARGA",
            'name' => "TUNJANGAN KELUARGA",
            'value' => "",
            'source' => "10",
            'formula' => "",
            'level' => 1,
            'desc' => "desc",
            'create_by' => "System",
        ]);

        DB::table('ms_formula')->insert([
            'code' => "SUBSIDI",
            'name' => "SUBSIDI",
            'value' => "",
            'source' => "1",
            'formula' => "",
            'level' => 1,
            'desc' => "desc",
            'create_by' => "System",
        ]);

        DB::table('ms_formula')->insert([
            'code' => "POTONGAN",
            'name' => "POTONGAN",
            'value' => "",
            'source' => "",
            'formula' => "@POTG_BPJS@+@POTG_RESTITUSI@+@POTG_TASPEN@",
            'level' => 0,
            'desc' => "desc",
            'create_by' => "System",
        ]);

        DB::table('ms_formula')->insert([
            'code' => "POTG_BPJS",
            'name' => "POTONGAN BPJS",
            'value' => "",
            'source' => "5",
            'formula' => "",
            'level' => 1,
            'desc' => "desc",
            'create_by' => "System",
        ]);

        DB::table('ms_formula')->insert([
            'code' => "POTG_RESTITUSI",
            'name' => "POTONGAN RESTITUSI",
            'value' => "",
            'source' => "6",
            'formula' => "",
            'level' => 1,
            'desc' => "desc",
            'create_by' => "System",
        ]);

        DB::table('ms_formula')->insert([
            'code' => "POTG_TASPEN",
            'name' => "POTONGAN TASPEN",
            'value' => "",
            'source' => "7",
            'formula' => "",
            'level' => 1,
            'desc' => "desc",
            'create_by' => "System",
        ]);


    }
}
