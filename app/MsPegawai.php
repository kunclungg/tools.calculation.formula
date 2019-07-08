<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MsPegawai extends Model
{
    protected $table='ms_pegawai';

    protected $fillable = [
        'id',
        'nip',
        'name',
        'bpjs',
        'golongan',
        'created_at',
        'updated_at',
    ];
}
