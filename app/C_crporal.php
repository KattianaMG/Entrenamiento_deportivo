<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class C_crporal extends Model
{
    protected $table = 'c_crporal';


    protected $primaryKey = 'codigo_cc';
    public $incrementing = false;

    public $timestamps = false;

    protected $fillable = ['fecha_cc', 'talla', 'peso', 'imc', 'p_abdominal', 'dni_cj'];
    //protected $hidden = ['clave'];

  /*  public function compraitem(){
        return $this->hasMany('App\CompraItem', 'fk_id_producto', 'id');
    }*/
}
