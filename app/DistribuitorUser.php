<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class DistribuitorUser extends Pivot
{

    public $incrementing = true;
    protected $fillable = [
        'distribuitor_id',	'user_id',	'rol_id'
    ];
    public function distribuitor()
    {
        return $this->belongsTo(Distribuitor::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function rol()
    {
        return $this->belongsTo(Rol::class);
    }
}
