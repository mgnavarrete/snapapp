<!-- Agregar Imagen -->
<div class="modal fade" id="agregarImagen" tabindex="-1" aria-labelledby="agregarImagenModal" aria-hidden="true">
    <div class="modal-dialog" style="max-width: 1000px;">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="agregarImagenModal">Subir Imágenes</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="agregarImagenForm" enctype="multipart/form-data" action="{{ route('upload.image', $evento->id_evento) }}" method="post">
                    @csrf

                    <!-- Nombre de la Imagen -->
                    <div class="col-xl-12 mb-3">
                        <label for="nombre" class="form-label text-default">Nombre</label>
                        <input type="text" class="form-control form-control-lg bg-outline-primary" id="nombre" name="nombre" placeholder="Nombre Fotógrafo">
                    </div>

                    <!-- Seleccionar Imágenes -->
                    <div class="col-xl-12 mb-3">
                        <label for="imagenes" class="form-label text-default">Seleccionar Imágenes</label>
                        <input type="file" class="form-control form-control-lg bg-outline-primary" id="imagenes" name="imagenes[]" accept="image/*" multiple>
                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" id="subirBtn">Subir</button>
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<style>
    .image-container {
        position: relative;
        display: inline-block;
    }
    .delete-icon {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        display: none;
        cursor: pointer;
        color: rgb(253, 0, 0);
        background-color: transparent;
        border-radius: 0;
        padding: 0;
        font-size: 24px;
    }
    .image-container:hover .delete-icon {
        display: block;
    }
</style>