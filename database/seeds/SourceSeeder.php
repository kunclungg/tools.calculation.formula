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
    }
}
