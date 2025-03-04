<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class addresses extends Model
{
    //
    protected $fillable = [
        'street',
        'country',
        'icon_id',
        'monster_id',
    ];
}
