<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class Validador extends Request
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
          'dni' => 'required|unique:posts|max:255',
          'name' => 'required',
          'apellido' => 'required',
          'sexo' => 'required',
          'deporte' => 'required',
          'semestre' => 'required',
          'promedio' => 'required',
          'edad' => 'required',
          'password' => 'required|min:6'
        ];
    }
}
