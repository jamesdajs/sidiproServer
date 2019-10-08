<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class DistributorDistributorType extends Pivot
{
    protected $fillable = [
        'distribuitor_id',	'distribuitor_type_id'
    ];
}
