<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Lugare
 *
 * @property $id
 * @property $lugar
 * @property $imagen
 * @property $descripcion
 * @property $url
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Lugare extends Model
{
    
    static $rules = [
		'lugar' => 'required',
		'imagen' => 'required',
		'descripcion' => 'required',
		'url' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['lugar','imagen','descripcion','url'];



}
