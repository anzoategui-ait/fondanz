<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tipoempresa
 *
 * @property $id
 * @property $tipoempresa
 * @property $codigoempresa
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Tipoempresa extends Model
{
    
    static $rules = [
		'tipoempresa' => 'required',
		'codigoempresa' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['tipoempresa','codigoempresa'];



}
