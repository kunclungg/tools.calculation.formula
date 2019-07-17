<?php

use Illuminate\Database\Seeder;

class ParamGajiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('prm_gaji')->insert([
            'acc' => "1A-00",
            'gjp' => "1323000",
            'khu' => "175000",
        ]);

        DB::table('prm_gaji')->insert([
            'acc' => "1A-02",
            'gjp' => "1364700",
            'khu' => "175000",
        ]);

        DB::table('prm_gaji')->insert([
            'acc' => "1A-04",
            'gjp' => "1407600",
            'khu' => "175000",
        ]);

        DB::table('prm_gaji')->insert([
            'acc' => "1B-03",
            'gjp' => "1444800",
            'khu' => "175000",
        ]);

        DB::table('prm_gaji')->insert([
            'acc' => "2A-00",
            'gjp' => "1714100",
            'khu' => "200000",
        ]);

        DB::table('prm_gaji')->insert([
            'acc' => "2A-01",
            'gjp' => "1741100",
            'khu' => "200000",
        ]);

        DB::table('prm_gaji')->insert([
            'acc' => "2A-03",
            'gjp' => "1795900",
            'khu' => "200000",
        ]);

        DB::table('prm_gaji')->insert([
            'acc' => "4E-32",
            'gjp' => "3188500",
            'khu' => "333000",
        ]);

        DB::table('prm_gaji')->insert([
            'acc' => "4D-32",
            'gjp' => "4799000",
            'khu' => "500000",
        ]);


    }
}
