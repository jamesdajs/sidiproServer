<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Distribuitor extends Model
{
    protected $fillable = [
        'nombre',	'direccion',	'descripcion',	'foto',	'lat',	'lng',	'telefono',	'email',	'estado',
    ];
    public function productypes()
    {
        return $this->hasMany(ProductType::class);
    }
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
    public function distribuitortype()
    {
        return $this->belongsToMany(DistribuitorType::class);
    }
}
