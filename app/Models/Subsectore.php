<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Subsectore
 *
 * @property $id
 * @property $nombre
 * @property $sector_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Actividade[] $actividades
 * @property Sectore $sectore
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Subsectore extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'sector_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','sector_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function actividades()
    {
        return $this->hasMany('App\Models\Actividade', 'subsector_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function sectore()
    {
        return $this->hasOne('App\Models\Sectore', 'id', 'sector_id');
    }
    

}
