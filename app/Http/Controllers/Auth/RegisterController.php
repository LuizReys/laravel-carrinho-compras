<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\EnderecoEntrega;
use App\Http\Controllers\Controller;
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
    protected $redirectTo = '/';

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
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
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
        $usuario = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);

        $entrega = EnderecoEntrega::create([
            'user_id' => $usuario->id,
            'nome' => $data['nome'],
            'cep' => $data['cep'],
            'estado' => $data['estado'],
            'cidade' => $data['cidade'],
            'bairro' => $data['bairro'],
            'rua' => $data['rua'],
            'numero' => $data['numero'],
        ]);

        $request = Request();

        if(empty($usuario) or empty($entrega))
        {
            $request->session()->flash('mensagem-falha', 'Falha ao se cadastrar. Tente novamente!');
            return redirect()->route('register');
        }

        $request->session()->flash('mensagem-sucesso', 'Cadastro efetuado com sucesso!');

        return $usuario;
    }
}
