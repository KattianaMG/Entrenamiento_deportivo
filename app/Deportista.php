<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Deportista extends Model
{
    protected $table = 'deportista';


    protected $primaryKey = 'dni_j';
    public $incrementing = false;

    public $timestamps = false;

    protected $fillable = ['dni_j', 'nombre_j', 'apellido_j', 'sexo_j', 'deporte_j', 'semestre', 'promedio', 'edad_j', 'fk_entrenador'];
    //protected $hidden = ['clave'];

    public function c_corporal(){
        return $this->hasMany('App\C_corporal', 'dni_cj', 'sdni_j');
    }
    public function flexibilidad(){
      return $this->hasmany('App\Flexibilidad', 'dni_fj', 'sdni_j');
    }
    public function fuerza(){
      return $this->hasmany('App\Flexibilidad', 'dni_jfz', 'sdni_j');
    }
    public function resistencia(){
      return $this->hasmany('App\Flexibilidad', 'dni_jres', 'sdni_j');
    }
}
