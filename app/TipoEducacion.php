<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoEducacion extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['titulo'];

    protected $table = 'tiposeducacion';

}
