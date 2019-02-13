<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Educacion extends Model
{
    protected $table = 'educacion';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id_usuario', 'id_tipo_educacion', 'titulo', 'institucion', 'anio'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function educacion(){
        return $this->belongsto(TipoEducacion::class);
    }

}
