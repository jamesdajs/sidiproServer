<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'product_type_id',	'nombre',	'precio',	'descripcion',	'foto',	'estado'
    ];
    public function producttype()
    {
        return $this->belongsTo(ProductType::class);
    }
    public function deliverypointsdistribuitors()
    {
        return $this->belongsToMany(DeliveryPointsDistribuitor::class);
    }
}
