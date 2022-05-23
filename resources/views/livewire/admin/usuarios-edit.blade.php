<div>
    <form wire:submit.prevent="editar">
        <div class="card carta-edit">

            <div class="card-header text-center">
                <h1>Editar informacion del usuario</h1>

            </div>


            <div class="card-body">
                <h5>Para cambiar un dato, simplemente se borrara el contenido que se muestra en el input y se escribira lo que se quiera añadir.</h5><br>
                @include('livewire.admin.formulario')
            </div>


            <div class="card-footer">
                <button class="float-right btn btn-primary"><i class="fa fa-edit"></i> Editar</button>
                <a href="{{ route('admin.usuarios') }}" class="btn btn-secondary"><i class="fa fa-home"></i>
                    Regresar</a>
            </div>

        </div>
    </form>

</div>
