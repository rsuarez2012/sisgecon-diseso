<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule\RequiredIf;
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
            'affiliate'         => 'required|in:1,2',
            'first_name'        => 'required',
            'last_name'         => 'required',
            'dni'               => 'required|unique:people,dni',
            'place_of_birth'    => 'required',
            'marital_status'    => 'required',
            'address'           => 'required',
            'telephone'         => 'required',
            'cellphone'         => 'required',
            'email'             => 'required',
            // 'employee_type'     => 'required_if:affiliate,==,"1"',
            'employee_type' => new RequiredIf($this->affiliate == '1'),
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
            'affiliate.required'        => 'Debe indicar si es afiliado o no.',
            'first_name.required'       => 'El nombre del afiliado es requerido.',
            'last_name.required'        => 'El apellido del afiliado es requerido.',
            'dni.required'              => 'La cedula del afiliado es requerido.',
            'place_of_birth'            => 'El lugar de nacimiento es requerido.',
            'marital_status.required'   => 'El estado civil del afiliado es requerido.',
            'address.required'          => 'La dirección del afiliado es requerido.',
            'telephone.required'        => 'El telefono del afiliado es requerido.',
            'cellphone.required'        => 'El telefono celular del afiliado es requerido.',
            'email.required'            => 'El correo del afiliado es requerido.',
            'employee_type.required'    => 'El tipo de empleado es requerido.',
            'position.required'         => 'El cargo del afiliado es requerido.',
            'status.required'           => 'El estatus del afiliado es requerido.',
            'gender.required'           => 'El sexo es requerido.',
            'birthdate.required'        => 'El fecha de nacimiento del afiliado es requerido.',
            'date_of_admission.required'=> 'El fecha de ingreso a la institucion es requerido.',

        ];
    }
}
