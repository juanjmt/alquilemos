<?php

namespace alquilemos\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDocenteRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        //dice que esto lo hacemos por otro lado
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
            'nombres'=>'required|min:4|max:30',
            'apellidos'=>'required|min:4|max:30',
            'documento'=>'required|integer',
            'avatar'=>'required|image',
            'slug'=>'required'
        ];
    }
}


