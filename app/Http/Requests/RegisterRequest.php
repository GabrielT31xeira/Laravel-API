<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'email' => 'required|email',
            'name' => 'required',
            'password' => 'required'
        ];
    }
    
    public function messages(){
        return [
            'email.required' => 'O email é obrigatório',
            'email.email' => 'O campo email deve ter @gmail.com',  
            'name.required' => 'O campo nome é obrigatorio', 
            'password.required' => 'O campo senha é obrigatorio',
            'password.confirmed' => 'O campo senha precisa de comfirmação'

        ];
    }
}
