<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Proyecto
 *
 * @property $id
 * @property $proyecto_nombre
 * @property $created_at
 * @property $updated_at
 *
 * @property Subproyecto[] $subproyectos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Proyecto extends Model
{
    
    static $rules = [
		'proyecto_nombre' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['proyecto_nombre'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function subproyectos()
    {
        return $this->hasMany('App\Models\Subproyecto', 'proyecto_id', 'id');
    }
    

}
