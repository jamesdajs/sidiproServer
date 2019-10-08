<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class DistributorUser extends Pivot
{
    protected $fillable = [
        'distributor_id',	'user_id',	'rol_id'
    ];
    public function rol()
    {
        return $this->belongsTo(Rol::class);
    }
}
