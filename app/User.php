<?php
namespace App;

use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre',
        'apellido',	'ci',	'telefono',	'genero',	'estado',
    	'email',	'password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function distribuitors()
    {
        return $this->belongsToMany(Distribuitor::class);
    }
    public function deliverypoints()
    {
        return $this->belongsToMany(DeliveryPoint::class);
    }
    public function deliverypointdistribuitor()
    {
        return $this->belongsToMany(DeliveryPointDistribuitor::class);
    }

}
