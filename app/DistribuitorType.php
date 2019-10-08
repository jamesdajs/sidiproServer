<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DistributorType extends Model
{
    protected $fillable = [
        'nombre',	'estado'
    ];
    public function distribuitors()
    {
        return $this->belongsToMany(Distribuitor::class);
    }
}
