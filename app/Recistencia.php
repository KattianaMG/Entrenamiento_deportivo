<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resistencia extends Model
{
    protected $table = 'resistencia';


    protected $primaryKey = 'codigo_res';
    public $incrementing = false;

    public $timestamps = false;

    protected $fillable = ['fecha_res', 'cooper', '	leger', 'burpee', 'dni_jres'];
    //protected $hidden = ['clave'];
}
