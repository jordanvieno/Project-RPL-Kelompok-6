<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Operation extends Model
{
    protected $table = 'operations';

    protected $fillable = [
        'category',
        'value',
        'max_value',
    ];

    public $timestamps = false;
}
