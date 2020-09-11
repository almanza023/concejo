<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $table = 'personas';

    protected $fillable = [
        'nombres', 'apellidos','documento','genero','telefono', 'direccion','estado', 'cargo_id', 'partido_id'
    ];

    public function setNombreAttribute($value)
    {
        $this->attributes['nombres'] = ucwords($value);
    }

    public function cargo()
    {
        return $this->belongsTo('App\Cargos');
    }

    public function partido()
    {
        return $this->belongsTo('App\Partido');
    }
}
