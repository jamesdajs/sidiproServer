<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class DeliveryPointDistribuitorProduct extends Pivot
{

    public $incrementing = true;
    protected $fillable = [
        'del_id',	'product_id','precio_venta',
        'cantidad'
    ];
}
