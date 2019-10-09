<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    //
    protected $fillable = [
        'rol_type_id',	'nombre',	'estado'
    ];
    public function roltype()
    {
        return $this->belongsTo(RolType::class);
    }
    public function menus()
    {
        return $this->belongsToMany(Menu::class)
        ->using(MenuRol::class)
        ->withPivot([
            'menu_id',
            'rol_id',
            'created_by',
            'updated_by'
        ]);
    }
    public function distribuitorusers()
    {
        return $this->hasMany(DistribuitorUser::class);
    }
    public function deliverypointusers()
    {
        return $this->hasMany(DeliveryPointUser::class);
    }
}
