<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class Favorite extends Pivot
{
    public $incrementing = true;
    protected $fillable = [
        'delivery_point_id',	'distribuitor_id',	'super',	'estrelas'
    ];
}
