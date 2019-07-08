<?php

use Illuminate\Database\Seeder;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ms_pegawai')->insert([
            'nip' => "P001",
            'name' => "Fandy",
            'bpjs' => "12000",
            'golongan' => "G1",
        ]);

        DB::table('ms_pegawai')->insert([
            'nip' => "P002",
            'name' => "Niko",
            'bpjs' => "14000",
            'golongan' => "G2",
        ]);
    }
}
