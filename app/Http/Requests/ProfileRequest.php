<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
//use App\Http\Requests\ProfileRequest;
//use Illuminate\Http\Request;
//use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;


class ProfileRequest extends FormRequest
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
        return  [
            
            'Nombre' => ['required', 'string', 'max:255'],
            'Apellido_paterno' => ['required', 'string', 'max:255'],
            'Apellido_materno' => ['required', 'string', 'max:255'],
            'Telefono' => ['required', 'int'],
            'Usuario' => ['required', 'string','max:50', 
            Rule::unique('users')->ignore($this->user()->id)],
            'Correo_electronico' => ['required', 
                'string', 
                'email',
                'max:255', 
                Rule::unique('users')->ignore($this->user()->id)
            ],
            'password' => ['nullable', 'string', 'min:8', 'confirmed'],
            'image' => ['nullable', 'image', ],
        ];
    }
}
