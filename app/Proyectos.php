<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proyectos extends Model
{
    //
 protected $table = 'proyectos';

 /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id_usuario', 'titulo', 'integrantes','descripcion', 'objetivo', 'estado', 'fecha', 'pais', 'financiamiento', 'pclave', 'ruta'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }


    

}