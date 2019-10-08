<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class DeliveryPointDistribuitor extends Pivot
{

    public $incrementing = true;
    protected $fillable = [
        'delivery_point_id',	'distribuitor_id',	'total',	'fecha_entrega'	,'estado'
    ];
    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
    public function Users()
    {
        return $this->belongsToMany(User::class);
    }
}