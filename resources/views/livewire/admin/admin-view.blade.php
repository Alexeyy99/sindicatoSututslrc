<div>
    <div class="grid" style="--bs-rows: 3; --bs-columns: 3;">
        <div class="g-start-2" style="grid-row: 2">
            <div class="container contenedor"><br>
                @if (count((array) $anuncios))
                    <div class="jumbotron">
                        @foreach ($anuncios as $anuncio)
                            <!--Anuncio-->
                            <div class="card">
                                <div class="card-header"><b>{{ $anuncio->titulo }}</b>
                                    <a href="{{ route('admin.anuncio-create') }}"
                                        class="btn btn-sm btn-dark float-right"><i class="fa fa-save"></i> Crear
                                        anuncio</a>
                                </div>

                                <div class="card-body ">
                                    <div class="container">
                                        <p>{{ $anuncio->contenido }}</p>

                                        <img src="{{ Storage::disk('public')->url('/statict/anuncios/'. $anuncio->url_img != null ? $anuncio->url_img : '/static/images/anuncios/anuncio.jpg') }}"
                                            width="200" , height="150"><br>
                                    </div>
                                </div>

                                <div class="card-footer h-10"><br>
                                    <footer class="blockquote-footer">
                                        <a href=""><small class="text-muted">Editar</a></small>
                                        <a href=""><small class="text-muted">Desactivar</a></small>
                                        <small
                                            class="float-right text-muted muted"><b>{{ $anuncio->created_at }}</b></a></small>
                                    </footer>
                                </div>
                            </div> <br>
                        @endforeach
                    </div>
                @else
                    <div class="card">
                        <div class="card-header"><b>Sin resultados</b>
                            <a href="{{ route('admin.anuncio-create') }}" class="btn btn-sm btn-dark float-right"><i
                                    class="fa fa-save"></i> Crear
                                anuncio</a>
                        </div>

                        <div class="card-body">
                            <div class="container">
                                <p>No hay resultados existentes</p>

                                <img src="{{ Storage::disk('public')->url('static/images/anuncio.jpg') }}" width="200"
                                    , height="150"><br>
                            </div>
                        </div>


                    </div>
                @endif

            </div>
        </div>
    </div>
    {{ $cargado == true ? $anuncios->links() : null }}



    {{-- <div class="modal fade" id="CrearAnuncio" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Nuevo Anuncio</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Recipient:</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                        <div class="mb-3">
                            <label for="message-text" class="col-form-label">Message:</label>
                            <textarea class="form-control" id="message-text"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Send message</button>
                </div>
            </div>
        </div>
    </div> --}}

    {{-- <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" id="staticBackdrop">
        <div class="card carta">
            <div class="card-footer">
                <div class="form-group"><br>
                    <input wire:model="titulo" class="form-control" id="comment" placeholder="Titulo del anuncio"
                        name="text">
                    <br>
                    <textarea wire:model="texto" placeholder="Especificaciones del anuncio"></textarea> <br>
                </div>

                <div class="row">
                    <div class="col-12">
                        <label for="">Subir imagen</label>
                        <input wire:model="foto" type="file" class="form-control-img" name="file">
                    </div>
                </div><br>

                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <a type="button" class="float-left btn btn-dark">Registros</a>
                            <a type="button" class="float-right btn btn-success">Publicar</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div> --}}
</div>
