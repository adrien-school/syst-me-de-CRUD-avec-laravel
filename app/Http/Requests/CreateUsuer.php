<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateUsuer extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name'=>'required|min:5' ,
            'email'=>'required|email|unique:users' ,
            'password'=>'required|min:5'

        ];
    }

    public function messages(){
        return [
            'name.required' =>'le champ name est requis ',
            'name.min'=>'le champ name  doit avoir au moins 5 caractere',
            'email.required'=>'le champ email est requis ',
            'email.email'=>'le champ email doit etre un email valide',
            'password.min'=>'le champ password  doit avoir au moins 5 caractere',
            'password.required'=>'le champ password est requis ',
            'email.unique'=>'l\'email est deja pris pas un autre utilisateur' ,

        ];
    }
}



