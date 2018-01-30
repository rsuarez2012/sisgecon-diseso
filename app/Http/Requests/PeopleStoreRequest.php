<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PeopleStoreRequest extends FormRequest
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
            'firs_name'         => 'required',
            'last_name'         => 'required',
            'dni'               => 'required|unique:people,dni',
            'place_of_birth'    => 'required',
            'marital_status'    => 'required',
            'address'           => 'required',
            'telephone'         => 'required',
            'cellphone'         => 'required',
            'email'             => 'required',
            'employee_type'     => 'required',
            'position'          => 'required',
            'status'            => 'required',
            'gender'            => 'required',
            'birthdate'         => 'required',
            'date_of_admission' => 'required',



        ];
    }
    public function messages()
    {
        return [
            'firs_name.required'        => 'El nombre del titular es requerido.',
            'last_name.required'        => 'El apellido del titular es requerido.',
            'dni.required'              => 'La cedula del titular es requerido.',
            'place_of_birth'            => 'El lugar de nacimiento es requerido.',
            'marital_status.required'   => 'El estado civil del titular es requerido.',
            'address.required'          => 'La dirección del titular es requerido.',
            'telephone.required'        => 'El telefono del titular es requerido.',
            'cellphone.required'        => 'El telefono celular del titular es requerido.',
            'email.required'            => 'El correo del titular es requerido.',
            'employee_type.required'    => 'El tipo de empleado es requerido.',
            'position.required'         => 'El cargo del titular es requerido.',
            'status.required'           => 'El estatus del titular es requerido.',
            'gender.required'           => 'El sexo es requerido.',
            'birthdate.required'        => 'El fecha de nacimiento del titular es requerido.',
            'date_of_admission.required'=> 'El fecha de ingreso a la institucion es requerido.',

        ];
    }
}
