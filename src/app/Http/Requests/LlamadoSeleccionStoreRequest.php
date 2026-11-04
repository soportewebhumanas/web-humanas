<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LlamadoSeleccionStoreRequest extends FormRequest
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
            'cantidad'=>['required'],
            'cargo'=> ['required', 'max:255', 'string'],
            'dedicacion'=> ['required', 'max:255', 'string'],
            'asignatura'=> ['required', 'max:255', 'string'],
            'departamento'=> ['required', 'max:255', 'string'],
            'carrera'=> ['required', 'max:255', 'string'],
            'plan'=> ['required'],
            'observacion'=>['required'],
            'inicio_inscripcion' => ['required', 'date'],
            'fin_inscripcion' => ['required', 'date', 'after:inicio_inscripcion'],
            'enlace_inscripcion'=>['required','URL'] ,
            'activo' => ['required'],
            'resolucion' => ['required'],
        ];
    }
}
