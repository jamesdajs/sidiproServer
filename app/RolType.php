<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RolType extends Model
{
    //
    protected $fillable=[
        'detalle',	'estado'
    ];
    public function rols()
    {
        return $this->hasMany(Rol::class);
    }
}
