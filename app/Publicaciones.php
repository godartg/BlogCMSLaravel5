<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publicaciones extends Model
{
    //
 protected $table = 'publicaciones';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id_usuario', 'id_tipo_publicaciones', 'titulo', 'autores', 'universidad', 'anio', 'pais', 'revista', 'volumen', 'numero', 'pageI', 'pageF', 'volumenL', 'numeroL', 'ciudad', 'edicion', 'editorial', 'ruta'];

  public function user()
    {
        return $this->belongsTo(User::class);
    }

}