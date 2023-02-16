<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TExtrequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return True;
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
            'description'=>'required|min:10'

        ];
    }
    public function messages(){
        return [
            'nom.required' =>'le champ name est requis ',
            'nom.min'=>'le champ name  doit avoir au moins 5 caractere',
            'description.required'=>'le champ description est requis ',
            'email.email'=>'le champ description doit etre un email valide',

        ];
    }
}


