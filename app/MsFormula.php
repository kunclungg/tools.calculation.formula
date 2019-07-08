<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MsFormula extends Model
{
    protected $table='ms_formula';

    protected $fillable = [
        'id',
        'code',
        'name',
        'value',
        'source',
        'formula',
        'level',
        'desc',
        'created_at',
        'updated_at',
        'created_by',
    ];
}
