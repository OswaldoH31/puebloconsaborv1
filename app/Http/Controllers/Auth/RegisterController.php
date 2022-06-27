<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\rol;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */
    
    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
     
    /*27-03*/ 
    protected $redirectTo = RouteServiceProvider::Pregunta;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [

            
            'Nombre' => ['required', 'regex:/^(?=.{3,18}$)[a-zñA-ZÑ](\s?[a-zñA-ZÑ])*$/'],
            'Apellido_paterno' => ['required', 'string', 'regex:/^(?=.{3,36}$)[a-zñA-ZÑ](\s?[a-zñA-ZÑ])*$/'],
            'Apellido_materno' => ['required', 'regex:/^(?=.{3,36}$)[a-zñA-ZÑ](\s?[a-zñA-ZÑ])*$/'],
            'Telefono' => ['required','digits:10'],
            'Genero' => ['required'],
            'Fecha_nacimiento' => ['required','date'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'Usuario' => ['required', 'regex:/^[A-Za-z]\\w{5,29}$/','unique:users'],
            'password' => ['required','confirmed',
                        Password::min(8)->letters()->numbers()->mixedCase()->symbols()->uncompromised()
                    ],
        
        ]
        );
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        
        return User::create([
            'Nombre' => $data['Nombre'],
            'Apellido_paterno' => $data['Apellido_paterno'],
            'Apellido_materno' => $data['Apellido_materno'],
            'Fecha_nacimiento' => $data['Fecha_nacimiento'],
            'Genero' => $data['Genero'],
            'email' => $data['email'],
            'Telefono' => Hash::make($data['Telefono']),
            'Usuario' => $data['Usuario'],
            'Rol_id' => $data['Rol_id'],
            'password' => $data['password'],
        ]);
        
        /*27-03*/
        return redirect('/Preguntasecreta');

        
    }
}
