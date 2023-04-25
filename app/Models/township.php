<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class township extends Model
{
    use HasFactory;

    /**
     * Nombre de la tabla a utilizar.
     *
     * @var string
     */
    protected $table = 'townships';

    /**
     * Llave primaria a utilizar.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * Los atributos que son asignables en masa.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id_estado',
        'nombre'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    /**
     * Relaciones que deben emitirse.
     *
     * @var array<string>
     */
    protected $with = [
        //
    ];

    /**
     * Relaciones entre modelos uno a uno 
     */
    public function state()
    {
        return $this->hasOne(state::class, 'id', 'state_id');
    }
    public function users()
    {
        return $this->hasMany(user::class, 'id', 'township_id');
    }
}
