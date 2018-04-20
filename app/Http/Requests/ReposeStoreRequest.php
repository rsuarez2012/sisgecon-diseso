<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReposeStoreRequest extends FormRequest
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
            'pathology'         => 'required',
            'date'              => 'required',
            'since'             => 'required',
            'until'             => 'required',
            'doctor_issues'     => 'required',
            'valid_doctor'      => 'required',
            'specialty'         => 'required',
            'rest_days'         => 'required',
            
        ];
    }
    public function messages()
    {
        return [
            'people_id.required'        => 'El titular es requerido.',
            'pathology.required'        => 'El Motivo del reposo es requerido.',
            'date.required'             => 'Fecha de emición del reposo es requerido',
            'since.required'            => 'Fecha de inicio es requerido.',
            'until.required'            => 'Fecha de culminación es requerido.',
            'doctor_issues.required'    => 'Dr(@) que emite el reposo es requerido.',
            'valid_doctor.required'     => 'Dr(@) que valida el reposo es requerido.',
            'specialty.required'        => 'La especialidad es requerido.',
            'rest_days.required'        => 'Total de dias de reposo es requerido.',

        ];
    }
}
