<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    protected $table = 'proyectos';

    protected $fillable = [
        'nombre', 'descripcion','documento','anexos','ruta', 'persona_id','estado'
    ];

    public function setNombreAttribute($value)
    {
        $this->attributes['nombre'] = ucwords($value);
    }

    public function persona()
    {
        return $this->belongsTo('App\Persona');
    }


}
