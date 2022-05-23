<div>
    <head>
        <!--JQUERY-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <!-- FRAMEWORK BOOTSTRAP para el estilo de la pagina-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

        <!-- Los iconos tipo Solid de Fontawesome-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
        <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"></script>
        <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">


        <!-- Nuestro css-->
        <link rel="stylesheet" type="text/css" href="{{ asset('static/css/login.css') }}" th:href="@{/css/index.css}">

    </head>
    <body>
        <div class="modal-dialog text-center">
            <div class="col-sm-12 main-section">
                <div class="modal-content">
                    <div class="col-12 user-img">
                        <img src="{{ asset('static\images\sututslrc.png') }}"/>
                    </div>
                    <form class="col-12" th:action="@{/login}" method="get">

                        <div class="form-group" id="user-group">
                            <input type="text" class="form-control" placeholder="Usuario" name="username"/>
                        </div>
                        <div class="form-group" id="contrasena-group">
                            <input type="password" class="form-control" placeholder="Contraseña" name="password"/>
                        </div>

                        <button type="submit" class="btn btn-success">Iniciar sesion</button>
                        <a href="{{route('index')}}" class="btn btn-secondary"></i>Inicio</a>
                    </form>
                </div>
            </div>
        </div>
</div>
