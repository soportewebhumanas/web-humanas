<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventoUpdateRequest extends FormRequest
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
            'titulo' => ['required', 'max:255', 'string'],
            'grado' => ['required', 'max:255', 'string'],
            'curricular' => ['required', 'max:255', 'string'],
            'modalidad_id' => ['required', 'exists:modalidades,id'],
            'lugar_id' => ['exists:lugares,id'],
            'tipo_id' => ['required', 'exists:tipos_eventos,id'],
            'programa_id' => ['exists:programas_institucionales,id'],
            'responsables' => 'required | max:255',
            'colaboradores' => 'filled | max:255',
            'destinatarios' => 'filled | max:255',
            'carga_horaria' => ['nullable', 'numeric'],
            'fecha_inicio' => ['nullable', 'date'],
            'fecha_fin' => ['nullable', 'date', 'after:fecha_inicio'],
            'enlace_inscripcion' => ['nullable', 'url'],/*De esta forma se quita la obligatoriedad del link y con 'url' se agrega el tipo de dato que acepta*/
            /* 'enlace_inscripcion' => ['required'], De esta forma el link de inscripción es requerido*/
            'resolucion' => ['filled'],
            'observaciones' => ['nullable'],
            'imagen' => ['filled'],
            'active' => ['required', 'boolean'],
        ];
    }
}
