<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
    protected $fillable = [
        'distribuitor_id',	'nombre',	'estado',
    ];
    public function distribuitor()
    {
        return $this->belongsTo(Distribuitor::class);
    }
    public function products()
    {
        return $this->belongsTo(Product::class);
    }

}
