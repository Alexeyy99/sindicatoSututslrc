<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Usuario;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Hash;
use App\Http\Livewire\Admin\ReglasUsuario;


class UsuarioCreate extends Component
{
    public function mount()
    {
        $this->usuario = new Usuario();
    }

    use WithFileUploads;
    public Usuario $usuarios;
    public $archivo;
    public $password;
    public $confirm_password;

    public function render()
    {
        return view('livewire.admin.usuario-create');
    }


    public function crear()
    {

        $this->validate();
        $this->usuario->password = Hash::make($this->usuario->password);
        $this->usuario->save();
        $this->emit('alert-user-create', 'Has registrado a un nuevo usuario correctamente');
        //return (route('admin.view'));
    }

    protected function rules()
    {
        return ReglasUsuario::reglas();
    }
}
