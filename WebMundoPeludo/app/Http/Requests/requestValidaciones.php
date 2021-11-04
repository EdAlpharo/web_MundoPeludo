<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class requestValidaciones extends FormRequest
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
            'articulo' => 'required|max:50',
            'descripcion' => 'required|max:250',
            'precio' => 'required|numeric',
            'cantidad' => 'required|numeric',
            'especie' => 'required|max:50',
            'raza' => 'required|max:50',
            'edad' => 'required|numeric',
            'sexo' => 'required|max:50',
            'condicion_salud' => 'required|max:200',
            'vacunado' => 'required|max:3',
            'nombre' => 'required|max:50',
            'aPaterno' => 'required|max:50',
            'aMaterno' => 'required|max:50',
            'email' => 'email',
            'pass' => 'required|max:50',
            'cpass' => 'required|max:50',

        ];
    }
}
