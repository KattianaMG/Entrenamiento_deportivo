<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fuerza extends Model
{
    protected $table = 'fuerza';


    protected $primaryKey = 'codigo_fz';
    public $incrementing = false;

    public $timestamps = false;

    protected $fillable = ['fecha_fz', 'sit_up', 'press_banca', 'curl_biceps', 'sentadilla', 'f_hombro', 'dni_jfz'];
    //protected $hidden = ['clave'];
}
