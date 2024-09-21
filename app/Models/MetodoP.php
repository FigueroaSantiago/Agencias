<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MetodoP
 *
 * @property $id
 * @property $metodoP
 * @property $created_at
 * @property $updated_at
 *
 * @property Reserva[] $reservas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class MetodoP extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['metodoP'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function reservas()
    {
        return $this->hasMany(\App\Models\Reserva::class, 'id', 'id_metodoP');
    }
    
}
