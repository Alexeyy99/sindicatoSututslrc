<div>
    <form wire:submit.prevent="crear">
        <div class="card carta-create">
            <div class="card-header text-center">
                <h1>Formulario de registro</h1>
            </div>

            <div class="card-body">
                <div class="container">
                    <h5>Para registrar un nuevo usuario hay que llenar el siguiente formulario.</h5>
                </div><br>

                @include('livewire.admin.formulario')

            </div>

            <div class="card-footer">
                <div class="d-grid gap-2 col-6 mx-auto">
                    <button class="float-right btn btn-success"><i class="fa fa-save"></i> Guardar</button>
                </div>
            </div>
        </div>
    </form>
</div>
