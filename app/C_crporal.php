<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class C_corporal extends Model
{
    protected $table = 'c_corporal';


    protected $primaryKey = '	dni_j';
    public $incrementing = false;

    public $timestamps = false;

    protected $fillable = ['nombre_j', 'apellido_j', '	sexo_j', 'deporte_j', 'semestre', 'promedio', 'edad_j', 'fk_entrenador'];
    //protected $hidden = ['clave'];

  /*  public function compraitem(){
        return $this->hasMany('App\CompraItem', 'fk_id_producto', 'id');
    }*/
}
