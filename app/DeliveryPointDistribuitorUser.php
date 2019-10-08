<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class DeliveryPointDistribuitorUser extends Pivot
{
    protected $fillable = [
        'del_id',	'user_id'
    ];
}
