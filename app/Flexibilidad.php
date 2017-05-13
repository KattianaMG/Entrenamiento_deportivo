<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flexibilad extends Model
{
    protected $table = 'flexibilidad';


    protected $primaryKey = 'codigo_fl';
    public $incrementing = false;

    public $timestamps = false;

    protected $fillable = ['fecha_fl', 'well', 'f_profunda', 'split_lateral', 'elev_hombro', 'dni_fj'];
    //protected $hidden = ['clave'];

  /*  public function compraitem(){
        return $this->hasMany('App\CompraItem', 'fk_id_producto', 'id');
    }*/
}
