<?php

use Illuminate\Database\Seeder;

class SourceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
        DB::table('ms_source')->insert([
            'code' => "1",
            'table' => "ms_pegawai",
            'key' => "nip",
            'fields' => "bpjs",
            'source' => "",
            'create_by' => "System",
        ]);

        DB::table('ms_source')->insert([
            'code' => "2",
            'table' => "ms_pegawai",
            'key' => "nip",
            'fields' => "golongan",
            'source' => "3",
            'create_by' => "System",
        ]);

        DB::table('ms_source')->insert([
            'code' => "3",
            'table' => "ms_golongan",
            'key' => "code",
            'fields' => "value",
            'source' => "",
            'create_by' => "System",
        ]);
        */

        DB::table('ms_source')->insert([
            'code' => "1",
            'table' => "ms_staff_payroll_requirement",
            'key' => "nip",
            'fields' => "golongan_masa_kerja",
            'source' => "2",
            'create_by' => "System",
        ]);


        DB::table('ms_source')->insert([
            'code' => "2",
            'table' => "prm_gaji",
            'key' => "acc",
            'fields' => "gjp",
            'source' => "",
            'create_by' => "System",
        ]);

        DB::table('ms_source')->insert([
            'code' => "3",
            'table' => "ms_staff_payroll_requirement",
            'key' => "nip",
            'fields' => "golongan_masa_kerja",
            'source' => "4",
            'create_by' => "System",
        ]);

        DB::table('ms_source')->insert([
            'code' => "4",
            'table' => "prm_gaji",
            'key' => "acc",
            'fields' => "khu",
            'source' => "",
            'create_by' => "System",
        ]);

        DB::table('ms_source')->insert([
            'code' => "5",
            'table' => "tr_potongan",
            'key' => "nip",
            'fields' => "potg_bpjs",
            'source' => "",
            'create_by' => "System",
        ]);

        DB::table('ms_source')->insert([
            'code' => "6",
            'table' => "tr_potongan",
            'key' => "nip",
            'fields' => "potg_restitusi",
            'source' => "",
            'create_by' => "System",
        ]);

        DB::table('ms_source')->insert([
            'code' => "7",
            'table' => "tr_potongan",
            'key' => "nip",
            'fields' => "potg_taspen",
            'source' => "",
            'create_by' => "System",
        ]);

        DB::table('ms_source')->insert([
            'code' => "8",
            'table' => "ms_staff_payroll_requirement",
            'key' => "nip",
            'fields' => "ptkp",
            'source' => "9",
            'create_by' => "System",
        ]);

        DB::table('ms_source')->insert([
            'code' => "9",
            'table' => "prm_ptkp",
            'key' => "code",
            'fields' => "tjb",
            'source' => "",
            'create_by' => "System",
        ]);

        DB::table('ms_source')->insert([
            'code' => "10",
            'table' => "ms_staff_payroll_requirement",
            'key' => "nip",
            'fields' => "ptkp",
            'source' => "11",
            'create_by' => "System",
        ]);

        DB::table('ms_source')->insert([
            'code' => "11",
            'table' => "prm_ptkp",
            'key' => "code",
            'fields' => "jrp",
            'source' => "",
            'create_by' => "System",
        ]);
    }
}
