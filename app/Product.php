<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'product_type_id',	'nombre',	'precio',	'descripcion',	'foto',	'cantidad','estado'
    ];
    public function producttype()
    {
        return $this->belongsTo(ProductType::class);
    }
    public function deli_points_dis()
    {
        return $this->belongsToMany(DeliveryPointsDistribuitor::class);
    }
}
