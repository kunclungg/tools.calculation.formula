<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(FormulaSeeder::class);
        $this->call(SourceSeeder::class);
        $this->call(PegawaiSeeder::class);
        $this->call(GolonganSeeder::class);
        $this->call(PayrollRequirementSeeder::class);
        $this->call(ParamGajiSeeder::class);
        $this->call(PotonganSeeder::class);
        $this->call(PtkpSeeder::class);
    }
}
