<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PasantiaUpdateRequest extends FormRequest
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
            'organismo_solicitante' => 'required',
            'cantidad' => 'required | numeric',
            'duracion' => 'required | numeric',
            'destinatario' => 'required',
            'inicio_inscripcion' => 'required | date | after:today ',
            'fin_inscripcion' => 'required | date | after:inicio_inscripcion',
            'requisitos' => 'required | array ',
            'tareas' => 'required | array',
            'formulario_inscripcion' => 'required | url' ,
            'documentacion_obligatoria' => 'filled',
            'documentacion_obligatoria.*' => 'file',
            'observaciones' => 'required',
            'active' => 'filled'
        ];
    }

    public function messages() {
        return [
            'formulario_inscripcion.url' => 'Ingrese una URL valida',
            'requisitos.required' => 'Debe incluir al menos un item de requisito', 
            'tareas.required' => 'Debe incluir al menos un item de tareas', 
            'documentacion_obligatoria.required' => 'Debe incluir al menos un item de documentación obligatoria', 
        ];
    }
}
