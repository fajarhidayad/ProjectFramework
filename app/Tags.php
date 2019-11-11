<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama',
    ];
}
