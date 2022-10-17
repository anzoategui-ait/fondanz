<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Actividade
 *
 * @property $id
 * @property $nombre
 * @property $subsector_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Subsectore $subsectore
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Actividade extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'subsector_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','subsector_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function subsectore()
    {
        return $this->hasOne('App\Models\Subsectore', 'id', 'subsector_id');
    }
    

}
