<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Paciente
 *
 * @property $id
 * @property $nombre
 * @property $apellido
 * @property $tipoDoc
 * @property $doc
 * @property $genero
 * @property $fechaNacimiento
 * @property $estadoCivil
 * @property $direccion
 * @property $telefono
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Paciente extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'apellido' => 'required',
		'tipoDoc' => 'required',
		'doc' => 'required',
		'genero' => 'required',
		'fechaNacimiento' => 'required',
		'estadoCivil' => 'required',
		'direccion' => 'required',
		'telefono' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','apellido','tipoDoc','doc','genero','fechaNacimiento','estadoCivil','direccion','telefono'];



}
