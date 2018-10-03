<?php

namespace alquilemos;

use Illuminate\Database\Eloquent\Model;

class curso extends Model
{
    //
    protected $fillable=['nombre','descripcion','duracion','temas','logo'];
}
