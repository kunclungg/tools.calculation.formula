<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MsSource extends Model
{
    protected $table='ms_source';

    protected $fillable = [
        'id',
        'code',
        'table',
        'key',
        'fields',
        'source',
        'created_at',
        'updated_at',
        'created_by',
    ];
}
