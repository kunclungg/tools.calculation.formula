<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MsGolongan extends Model
{
    protected $table='ms_golongan';

    protected $fillable = [
        'id',
        'code',
        'value',
        'created_at',
        'updated_at',
    ];
}
