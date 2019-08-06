<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('guest');
    // }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:200'],
            'email' => ['required', 'string', 'email', 'max:200', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'sobrenome'=> ['required', 'string'],
            'cep' => ['required', 'numeric', 'max:8'],
            'endereco' => ['required', 'string', 'max:200'],
            'numero' => ['required', 'integer', 'max:45'],
            'complemento' => ['string', 'max:100'],
            'bairro' => ['required', 'string','max:100'],
            'data_nascimento' => ['required', 'string', 'max:10'],
            'estado' => ['required', 'string', 'max:100'],
            'cidade' => ['required', 'string', 'max:100'],
            'nivel_user' => ['required', 'tinyInteger'],
            'telefone' => ['required','integer', 'max:45']
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'nivel_user'=> $data['nivel_user'],
            'sobrenome'=> $data['sobrenome'],
            'cep' => $data['cep'],
            'endereco' => $data['endereco'],
            'numero' => $data['numero'],
            'complemento' => $data['complemento'],
            'bairro' => $data['bairro'],
            'data_nascimento' => $data['data_nascimento'],
            'estado' => $data['estado'],
            'cidade' => $data['cidade'],
            'nivel_user' => $data['nivel_user'],
            'telefone' => $data['telefone'],
        ]);
    }
}
