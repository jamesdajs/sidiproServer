<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable = [
        'nombre',	'url',	'detalle',	'estado',
    ];
    public function rol()
    {
        return $this->belongsToMany(Rol::class);
    }
}
