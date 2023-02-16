<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserLoginRequest extends FormRequest
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
            'email'=>'required|email|unique:users' ,
            'password'=>'required|min:5'

        ];
    }

    public function messages(){

        return [
            
            'email.required' =>'le champ email est requis ',
            'email.min'=>'le champ name  doit avoir au moins 5 caractere',
            'password.required'=>'le champ passsword est requis ',
    
        ];
    } 
}
