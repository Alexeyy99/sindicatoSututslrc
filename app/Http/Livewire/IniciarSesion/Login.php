<?php

namespace App\Http\Livewire\IniciarSesion;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{

    public $email;
    public $password;

    public function render()
    {
        return view('livewire.iniciar-sesion.login');
    }

    public function login(){
        $datos = $this->validate();

        if (Auth::attempt($datos)){
            return redirect(route('index'));
        }else{
            $this->emit('alerta', 'Verifica el correo o la contraseña');
            $this->email = null;
            $this->password = null;
        }
    }

    public function rules(){
        return[
            'email' => 'required|email',
            'password' => 'required|min:8|string'
        ];
    }
}
