<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class DeliveryPointDistribuitorProduct extends Pivot
{
    protected $fillable = [
        'del_id',	'product_id'
    ];
}
