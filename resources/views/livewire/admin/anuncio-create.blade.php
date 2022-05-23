<div>
    <form wire:submit.prevent="crearAnuncio">
        <div class="container cont-anuncio">
            <div class="row">
                <div class="col">
                    <div class="card carta w-50">
                        <div class="card-footer">
                            <div class="form-group"><br>
                                <input wire:model="anuncio.titulo" class="form-control" id="comment"
                                    placeholder="Titulo del anuncio" name="text">
                                @error('anuncio.titulo')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                <br>
                                <textarea wire:model="anuncio.contenido" placeholder="Especificaciones del anuncio"></textarea> <br>
                                @error('anuncio.contenido')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div><br>

                            <div class="row">
                                <div class="col-sm">
                                    <label for="">Subir imagen</label>
                                    <input wire:model="url_img" type="file" class="form-control-img" name="file"><i class="fa-file-image-o"></i>
                                    @error('url_img')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div><br>

                            <div class="row align-items-center">
                                <div class="col-sm">
                                    <div class="form-group">
                                        <a type="button" class="float-left btn btn-dark">Registros</a>
                                        <button wire:loading.attr="disabled" wire:target="url_img"
                                            class="float-right btn btn-success"><i class="fa fa-save"></i>
                                            Publicar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
