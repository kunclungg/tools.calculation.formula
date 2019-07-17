<?php

use Illuminate\Database\Seeder;

class PtkpSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('prm_ptkp')->insert([
            'code' => "TK",
            'ket' => "Tidak Kawin",
            'jrp' => "1100000",
            'tji' => "0",
            'tja' => "0",
            'jml' => "1",
            'tjb' => "100000",
            'tjk' => "0",
        ]);

        DB::table('prm_ptkp')->insert([
            'code' => "KW",
            'ket' => "Kawin",
            'jrp' => "1200000",
            'tji' => "0",
            'tja' => "0",
            'jml' => "2",
            'tjb' => "200000",
            'tjk' => "0",
        ]);
    }
}
