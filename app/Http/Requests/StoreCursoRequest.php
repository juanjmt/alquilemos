<?php

namespace alquilemos\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCursoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
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
            'nombre'=>'required|min:2|max:30',
            'duracion'=>'required|integer',
            'descripcion'=>'required',
            'logo'=>'required|image',
            'temas'=>'required'
        ];
    }
}
