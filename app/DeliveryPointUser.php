<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class DeliveryPointUser extends Pivot
{
    protected $fillable = [
        'delivery_point_id',	'user_id',	'rol_id'
    ];
    public function rol()
    {
        return $this->belongsTo(Rol::class);
    }
}
