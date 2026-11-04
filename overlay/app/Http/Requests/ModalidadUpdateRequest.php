<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ModalidadUpdateRequest extends FormRequest
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
        // Obtiene el registro o ID de la modalidad desde el parámetro 'modalidades' de la ruta
        $modalidad = $this->route('modalidades');
        $modalidadId = is_object($modalidad) ? $modalidad->id : $modalidad;

        return [
            'nombre' => [
                'required',
                'string',
                Rule::unique('modalidades', 'nombre')->ignore($modalidadId),
            ],
        ];
    }

    public function messages() 
    {
        return [
        ];
    }
}