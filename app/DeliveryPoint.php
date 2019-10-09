<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DeliveryPoint extends Model
{

    public $incrementing = true;
    protected $fillable = [
        'nombre',	'direccion',	'descripcion',	'foto',	'lat',	'lng',	'telefono',	'estado'
];
    public function users()
        {
            return $this->belongsToMany(User::class);
        }
    
}
