<?php

namespace App\Http\Livewire\Admin;

use App\Models\Anuncio;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class AnuncioEdit extends Component
{
    public Anuncio $anuncio;
    public $url_img;

    public function render()
    {
        return view('livewire.admin.anuncio-edit');
    }

    public function editarAnuncio()
    {
        $this->validate();
        if ($this->url_img != null) {
            $this->anuncio->url_img = Storage::disk('public')->put('static/images/anuncios', $this->url_img);
        }
        $this->anuncio->save();
        $this->emit('alert-anuncio-edit', 'Has modificado correctamente el anuncio');
        return (route('admin.view'));
    }

    protected function rules()
    {
        return ReglasAnuncio::reglas($this->anuncio->id);
    }
}
