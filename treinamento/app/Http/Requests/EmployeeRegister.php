<?php

namespace treinamento\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeRegister extends FormRequest
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
            'nom'      => 'bail|required|max:200',
            'dn'        => 'bail|required|date',
            'cpf'       => 'bail|required|min:11|max:11|numeric',
            'rg'        => 'bail|required|min:10|max:10',
            'matricula' => 'bail|required|',
            'mail'      => 'bail|required|email',
            'senha'     => 'bail|required',
            'cargo'     => 'bail|required|string',
            'atividade' => 'bail|required|string',
            'exposicao' => 'bail|required|string',
            'di'        => 'bail|required|date',
            'prazo'     => 'bail|required|date',
            'cep'       => 'bail|required|',
            'rua'       => 'bail|required|',
            'bairro'    => 'bail|required|',
            'cidade'    => 'bail|required|',
            'estado'    => 'bail|required|',
            'tlog'      => 'bail|required|',
            'log'       => 'bail|required|',

        ];
    }

    public function messages()
    {
        return [
            'required' => 'Preenchimento obrigatório',
            'email'    => 'E-mail inválido',
            'min'      => 'Tamanho mínimo permitido :min',
            'numeric'  => 'Apenas números são permitidos'

        ];

    }
}
