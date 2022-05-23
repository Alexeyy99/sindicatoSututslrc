<div>
    <div class="card cardShow text-center ">
        <div class="card-header text-center">
            <h2 class="info">Información completa del usuario</H2>
        </div>

        <div class="card-body">
            <div class="row mb-4">
                <div class="col-4">
                    <input type="text" value="{{ $usuario->nombre }}" class="disabled" disabled>
                </div>
                <div class="col-4">
                    <input type="text" value="{{ $usuario->apellido }}" class="disabled" disabled>
                </div>
                <div class="col-4">
                    <input type="text" value="{{ $usuario->email }}" class="disabled" disabled>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-4">
                    <input type="text" value="{{ $usuario->puesto }}" class="disabled" disabled>
                </div>
                <div class="col-4">
                    <input type="text" value="{{ $usuario->departamento }}" class="disabled" disabled>
                </div>
                <div class="col-4">
                    <input type="text" value="{{ $usuario->telefono }}" class="disabled" disabled>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-4">
                    <input type="text" value="{{ $usuario->puesto }}" class="disabled" disabled>
                </div>
                <div class="col-4">
                    <input type="text" value="{{ $usuario->departamento }}" class="disabled" disabled>
                </div>
                <div class="col-4">
                    <input type="text" value="{{ $usuario->telefono }}" class="disabled" disabled>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-4">
                    <input type="text" value="{{ $usuario->fecha_afiliacion }}" class="disabled" disabled>
                </div>
                <div class="col-4">
                    <input type="text" value="{{ $usuario->fecha_ingreso }}" class="disabled" disabled>
                </div>
            </div>
        </div>

        <div class="card-footer">
            <a href="{{route('admin.usuarios')}}" class="btn btn-sm btn-dark float-left"><i class="fa fa-arrow-circle-left   "></i> Regresar</a>
            <a href="{{route('admin.user-edit', $usuario)}}" class="btn btn-sm btn-info float-right"><i class="fa fa-edit"></i>Editar información</a>
        </div>
    </div>
</div>
