<?php

use Illuminate\Database\Seeder;

class GolonganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ms_golongan')->insert([
            'code' => "G1",
            'value' => "2500",
        ]);

        DB::table('ms_golongan')->insert([
            'code' => "G2",
            'value' => "4000",
        ]);
    }
}
