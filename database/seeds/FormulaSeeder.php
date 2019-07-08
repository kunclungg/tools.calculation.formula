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
        DB::table('ms_formula')->insert([
            'code' => "A",
            'name' => "A",
            'value' => "",
            'source' => "",
            'formula' => "B+C+D",
            'level' => 0,
            'desc' => "desc",
            'create_by' => "System",
        ]);

        DB::table('ms_formula')->insert([
            'code' => "B",
            'name' => "B",
            'value' => "",
            'source' => "",
            'formula' => "F+G",
            'level' => 1,
            'desc' => "desc",
            'create_by' => "System",
        ]);

        DB::table('ms_formula')->insert([
            'code' => "C",
            'name' => "C",
            'value' => "",
            'source' => "1",
            'formula' => "",
            'level' => 2,
            'desc' => "desc",
            'create_by' => "System",
        ]);

        DB::table('ms_formula')->insert([
            'code' => "D",
            'name' => "D",
            'value' => "7500",
            'source' => "",
            'formula' => "",
            'level' => 2,
            'desc' => "desc",
            'create_by' => "System",
        ]);

        DB::table('ms_formula')->insert([
            'code' => "E",
            'name' => "E",
            'value' => "",
            'source' => "",
            'formula' => "B+C+D*0.1",
            'level' => 1,
            'desc' => "desc",
            'create_by' => "System",
        ]);

        DB::table('ms_formula')->insert([
            'code' => "F",
            'name' => "F",
            'value' => "100000",
            'source' => "",
            'formula' => "",
            'level' => 2,
            'desc' => "desc",
            'create_by' => "System",
        ]);

        DB::table('ms_formula')->insert([
            'code' => "G",
            'name' => "G",
            'value' => "3000000",
            'source' => "",
            'formula' => "",
            'level' => 2,
            'desc' => "desc",
            'create_by' => "System",
        ]);
    }
}
