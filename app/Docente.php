<?php

namespace alquilemos;

use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
	protected $fillable=['documento','nombres','apellidos','avatar'];
        /**
			Get the route key for the model.
			@return string
		 */
		public function getRouteKeyName()
		{
		    return 'slug';
		}
		
}
