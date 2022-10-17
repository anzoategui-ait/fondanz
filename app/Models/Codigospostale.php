<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Codigospostale
 *
 * @property $id
 * @property $codigo
 * @property $zona
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Codigospostale extends Model
{
    
    static $rules = [
		'codigo' => 'required',
		'zona' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['codigo','zona'];



}
