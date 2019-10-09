<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class DeliveryPointUser extends Pivot
{
    public $incrementing = true;
    protected $fillable = [
        'delivery_point_id','user_id','rol_id'
    ];
    public function rol()
    {
        return $this->belongsTo(Rol::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function deliverypoint()
    {
        return $this->belongsTo(DeliveryPoint::class);
    }
}
