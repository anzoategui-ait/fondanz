<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Subproyecto
 *
 * @property $id
 * @property $subproyecto_nombre
 * @property $subproyecto_descriccion
 * @property $subproyecto_monto
 * @property $subproyecto_estado
 * @property $proyecto_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Proyecto $proyecto
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Subproyecto extends Model
{
    
    static $rules = [
		'subproyecto_nombre' => 'required',
		'subproyecto_descriccion' => 'required',
		'subproyecto_monto' => 'required',
		'subproyecto_estado' => 'required',
		'proyecto_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['subproyecto_nombre','subproyecto_descriccion','subproyecto_monto','subproyecto_estado','proyecto_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function proyecto()
    {
        return $this->hasOne('App\Models\Proyecto', 'id', 'proyecto_id');
    }
    

}
