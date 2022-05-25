<body>

    <div id="wrapper">
        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav nav-pills nav-stacked" id="menu">
                <li class="active">
                    <div class="text-center">
                        <img src="{{ asset('static/images/sututslrc.png') }}" width="150" height="150" alt="">
                    </div>
                </li>
                <li>
                    <a href=""><span class="fa-stack fa-lg pull-left"><i
                                class="fa fa-users fa-stack-1x "></i></span>Usuarios</a>
                    <ul class="nav-pills nav-stacked" style="list-style-type:none;">
                        <li><a href="{{ route('admin.usuarios') }}"><span class="fa-stack fa-lg pull-left"><i
                                        class="fa fa-table fa-stack-1x "></i></span>Lista de usuarios</a></li>
                        <li><a href="{{ route('admin.create-user') }}"><span class="fa-stack fa-lg pull-left"><i
                                        class="fa fa-user-plus fa-stack-1x "></i></span>Crear usuarios</a></li>
                    </ul>
                </li>
                <li>
                    <a href=""><span class="fa-stack fa-lg pull-left"><i
                                class="fa fa-calendar fa-stack-1x "></i></span>Anuncios</a>
                    <ul class="nav-pills nav-stacked" style="list-style-type:none;">
                        <li><a href="{{ route('admin.anuncios') }}"><span class="fa-stack fa-lg pull-left"><i
                                        class="fa fa-table fa-stack-1x " aria-hidden="true"></i></span>Lista de
                                anuncios</a></li>
                        <li><a href="{{ route('admin.anuncio-create') }}"><span class="fa-stack fa-lg pull-left"><i
                                        class="fa fa-newspaper fa-stack-1x "></i></span>Crear anuncio</a></li>
                    </ul>
                </li>
                <li>
                    <a href=""><span class="fa-stack fa-lg pull-left"><i
                                class="fa fa-vcard fa-stack-1x "></i></span>Solicitudes</a>
                    <ul class="nav-pills nav-stacked" style="list-style-type:none;">
                        <li>
                            <a href="{{ route('admin.solicitudes') }}"><span class="fa-stack fa-lg pull-left"><i
                                        class="fa fa-table fa-stack-1x" aria-hidden="true"></i></span>Lista de
                                solicitudes</a>
                        </li>

                    </ul>
                </li>

            </ul>
        </div>
        <!-- /#sidebar-wrapper -->
        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="xyz">
                <div class="row">
                    <div class="col-lg-12">

                        <nav class="navbar navbar-expand-lg navbar-dark">
                            <div class="container">
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <form class="form-inline position-relative my-2 d-inline-block">
                                    <input class="form-control" type="search" placeholder="Buscar"
                                        aria-label="Buscar">
                                    <button class="btn btn-search position-absolute" type="submit"><i
                                            class="fa fa-search"></i></button>
                                </form>
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav ml-auto">
                                        <li>
                                            <a class="nav-link font-weight-bold"><i class="fa fa-user-circle"></i>
                                                Nombre usuario
                                            </a>
                                            {{-- <ul class="nav-pills">
                                                <li class="nav-item">
                                                    <a class="nav-link font-weight-bold" aria-hidden="true"><i
                                                            class="fa fa-user"></i> Cerrar sesion </a>
                                                </li>
                                            </ul> --}}
                                        </li>

                                    </ul>

                                </div>
                            </div>
                        </nav>

                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->

</body>
