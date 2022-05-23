<head>
    <link href="{{ public_path('static/css/app.css') }}" rel="stylesheet" type="text/css">
</head>

<table class="table text-center table-striped">
    <thead class="table-dark">
        <tr>
            <th scope="col"><b>NOMBRE</b></th>
            <th scope="col"><b>APELLIDO</b></th>
            <th scope="col"><b>DEPARTAMENTO</b></th>
            <th scope="col"><b>PUESTO</b></th>
            <th scope="col"><b>ESTADO</b></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($usuarios as $usuario)
            <tr>
                <th scope="row">{{ $usuario->nombre }}</th>
                <th>{{ $usuario->apellido }}</th>
                <th>{{ $usuario->puesto }}</th>
                <th>{{ $usuario->departamento }}</th>
                <th><span class="badge badge-pill badge-success">Activo</span></th>

            </tr>
        @endforeach
    </tbody>
</table>
