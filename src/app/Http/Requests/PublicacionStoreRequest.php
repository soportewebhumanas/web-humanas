<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PublicacionStoreRequest extends FormRequest
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
            'titulo' => ['required'],
            'esPeriodica' => ['required'],
            'tipoDePublicacion' => [''],
            'anio' => ['required', 'integer'],
            'editorial' => [''],
            'autor' => [''],
            'compilador' => [''],
            'coordinador' => [''],
            'editor' => [''],
            'resumen' => ['required'],
            'enlace' => ['nullable','url'],
            'activo' => ['required'],
            'imagen' => ['required'],
        ];
    }

    public function messages() {
        return [
            'autor.required' => 'Debe incluir al menos un ítem', 
            'compilador.required' => 'Debe incluir al menos un ítem', 
            'coordinador.required' => 'Debe incluir al menos un ítem', 
            'editor.required' => 'Debe incluir al menos un ítem', 
        ];
    }
}
