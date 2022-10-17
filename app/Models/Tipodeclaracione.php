<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tipodeclaracione
 *
 * @property $id
 * @property $tipodeclaracion
 * @property $porcentaje
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Tipodeclaracione extends Model
{
    
    static $rules = [
		'tipodeclaracion' => 'required',
		'porcentaje' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['tipodeclaracion','porcentaje'];



}
