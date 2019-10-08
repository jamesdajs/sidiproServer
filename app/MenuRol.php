<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class MenuRol extends Pivot
{
    //
    protected $fillable = [
        'menu_id'	,'rol_id'
    ];
}
