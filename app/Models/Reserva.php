<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Reserva
 *
 * @property $id
 * @property $fechaReserva
 * @property $id_metodoP
 * @property $id_users
 * @property $created_at
 * @property $updated_at
 *
 * @property MetodoP $metodoP
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Reserva extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['fechaReserva', 'id_metodoP', 'id_users'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function metodoP()
    {
        return $this->belongsTo(\App\Models\MetodoP::class, 'id_metodoP', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class, 'id_users', 'id');
    }
    
}
