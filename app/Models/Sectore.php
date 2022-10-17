<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Sectore
 *
 * @property $id
 * @property $nombre
 * @property $created_at
 * @property $updated_at
 *
 * @property Subsectore[] $subsectores
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Sectore extends Model
{
    
    static $rules = [
		'nombre' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function subsectores()
    {
        return $this->hasMany('App\Models\Subsectore', 'sector_id', 'id');
    }
    

}
