<?php

use Illuminate\Database\Seeder;

class PotonganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tr_potongan')->insert([
            'nip' => "ANANDA003",
            'potg_bpjs' => "25000",
            'potg_restitusi' => "60328",
            'potg_taspen' => "99542",
        ]);

        DB::table('tr_potongan')->insert([
            'nip' => "ANANDA001",
            'potg_bpjs' => "51000",
            'potg_restitusi' => "63740",
            'potg_taspen' => "105171",
        ]);

        DB::table('tr_potongan')->insert([
            'nip' => "ANANDA002",
            'potg_bpjs' => "75000",
            'potg_restitusi' => "90821",
            'potg_taspen' => "149855",
        ]);
    }
}
