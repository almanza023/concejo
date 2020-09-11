<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asistencia extends Model
{
    protected $table = 'asistencias';

    protected $fillable = [
        'fecha', 'persona_id','estado'
    ];

    public function setNombreAttribute($value)
    {
        $this->attributes['nombres'] = ucwords($value);
    }

    public function setApellidoAttribute($value)
    {
        $this->attributes['apellidos'] = ucwords($value);
    }


    public function persona()
    {
        return $this->belongsTo('App\Persona');
    }
}
