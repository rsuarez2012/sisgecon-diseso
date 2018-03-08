<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HistoryStoreRequest extends FormRequest
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
            'people_id'         => 'required',
            'motive'            => 'required',
            'current_illness'   => 'required',
            'personal_history'  => 'required',
            'mon_history'       => 'required',
            'dad_history'       => 'required',
            'sons_history'      => 'required',
            'brot_history'      => 'required',
            'pulse'             => 'required',
            'diagnoses'         => 'required',
            'plan'              => 'required',
            'observations'      => 'required',
        ];
    }
    public function messages()
    {
        return [
            'people_id.required'        => 'Seleccionar un tirular.',
            'motive.required'           => 'Motivo de la consulta es requerido.',
            'current_illness.required'  => 'La Enfermedad actual es requerida.',
            'personal_history.required' => 'Los Precedentes Personales es requerido.',
            'mon_history.required'      => 'Los Precedentes de la Madre son requerido.',
            'dad_history.required'      => 'Los Precedentes del Padre son requerido.',
            'sons_history.required'     => 'Los Precedentes de Hijos son requerido.',
            'brot_history.required'     => 'Los Precedentes de Hermanos son requerido.',
            'pulse.required'            => 'El Pulso del paciente es requerido',
            'diagnoses.required'        => 'El Diagnostico es requerido.',
            'plan.required'             => 'El Plan es requerido.',
            'observations.required'     => 'Las Observaciones son requerido.',
        ];
    }
}
