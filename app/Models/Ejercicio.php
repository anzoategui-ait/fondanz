<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Ejercicio
 *
 * @property $id
 * @property $ejercicio_year
 * @property $ejercicio_unidad_tributaria
 * @property $ejercicio_unidad_minima
 * @property $ejercicio_unidad_maxima
 * @property $ejercicio_cierre
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Ejercicio extends Model
{
    
    static $rules = [
		'ejercicio_year' => 'required',
		'ejercicio_unidad_tributaria' => 'required',
		'ejercicio_unidad_minima' => 'required',
		'ejercicio_unidad_maxima' => 'required',
		'ejercicio_cierre' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['ejercicio_year','ejercicio_unidad_tributaria','ejercicio_unidad_minima','ejercicio_unidad_maxima','ejercicio_cierre'];



}
