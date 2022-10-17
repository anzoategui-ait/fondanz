<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Municipio
 *
 * @property $id
 * @property $nombre
 * @property $codmunicipio
 * @property $created_at
 * @property $updated_at
 *
 * @property Parroquia[] $parroquias
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Municipio extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'codmunicipio' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','codmunicipio'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function parroquias()
    {
        return $this->hasMany('App\Models\Parroquia', 'municipio_id', 'id');
    }
    

}
