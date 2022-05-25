<?php

namespace App\Http\Livewire\Admin;

use App\Models\Admin;
use App\Models\Anuncio;
use Livewire\Component;
use Livewire\WithPagination;

class AnuncioIndex extends Component
{
    public function mount()
    {
        $this->anuncio = new Anuncio();
    }

    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $search;
    public $cargado = false;

    public function render()
    {
        $anuncios = ($this->cargado == true) ? Anuncio::where('titulo', 'LIKE', '%' . $this->search . '%')
            ->paginate(10) : [];
        $anuncios = Anuncio::all();
        return view('livewire.admin.anuncio-index', compact('anuncios'));
    }

    public function cargando()
    {
        $this->cargado = true;
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }
}
