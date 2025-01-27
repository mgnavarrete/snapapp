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

                    <!-- Nombre del fotógrafo -->
                    <div class="col-xl-12 mb-3">
                        <label for="nombre" class="form-label text-default">Nombre Fotógrafo</label>
                        <input type="text" class="form-control form-control-lg bg-outline-primary" id="nombre" name="nombre" placeholder="Nombre Fotógrafo" required>
                    </div>

                    <!-- Seleccionar Imágenes o Videos -->
                    <div class="col-xl-12 mb-3">
                        <label for="imagenes" class="form-label text-default">Seleccionar Imágenes o Videos</label>
                        <input type="file" class="form-control form-control-lg bg-outline-primary" id="imagenes" name="imagenes[]" accept="image/*,video/*" capture="environment" multiple required>
                    </div>

                    <!-- Contenedor para la vista previa de imágenes -->
                    <div id="preview" class="col-xl-12 mb-3"></div>

                    <div class="modal-footer">
                        <div class="spinner-border text-primary d-none" role="status" id="spinnerAgregarImagen">
                            <span class="visually-hidden">Loading...</span>
                        </div>
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
        top: 5px;
        right: 5px;
        display: block;
        cursor: pointer;
        color: white;
        background-color: #ff6f91; /* Rojo más suave, tirando a rosado */
        border-radius: 50%; /* Asegura que el ícono sea redondo */
        padding: 5px;
        font-size: 16px;
        width: 24px; /* Asegura que el ícono sea circular */
        height: 24px; /* Asegura que el ícono sea circular */
        display: flex;
        align-items: center;
        justify-content: center;
    }
</style>

<script>
    let selectedFiles = [];

    document.getElementById('agregarImagenForm').addEventListener('submit', function() {
        // Ocultar el botón de guardar
        document.getElementById('subirBtn').classList.add('d-none');
        // Mostrar el spinner
        document.getElementById('spinnerAgregarImagen').classList.remove('d-none');
    });

    document.getElementById('imagenes').addEventListener('change', function(event) {
        const previewContainer = document.getElementById('preview');
        const newFiles = Array.from(event.target.files);

        // Agregar nuevos archivos a la lista de archivos seleccionados
        selectedFiles = selectedFiles.concat(newFiles);

        // Limpiar el contenedor de vista previa
        previewContainer.innerHTML = '';

        // Mostrar todos los archivos seleccionados
        selectedFiles.forEach((file, index) => {
            if (file.type.startsWith('image/')) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const imageContainer = document.createElement('div');
                    imageContainer.classList.add('image-container');
                    
                    const img = document.createElement('img');
                    img.src = e.target.result;
                    img.style.maxWidth = '150px';
                    img.style.margin = '10px';
                    
                    const deleteIcon = document.createElement('span');
                    deleteIcon.classList.add('delete-icon');
                    deleteIcon.innerHTML = '&times;';
                    deleteIcon.onclick = function() {
                        // Eliminar el archivo seleccionado
                        selectedFiles.splice(index, 1);
                        imageContainer.remove();
                        updateFileInput(selectedFiles);
                        // Actualizar la vista previa después de eliminar
                        renderPreview();
                    };

                    imageContainer.appendChild(img);
                    imageContainer.appendChild(deleteIcon);
                    previewContainer.appendChild(imageContainer);
                };
                reader.readAsDataURL(file);
            }
        });

        updateFileInput(selectedFiles);
    });

    function updateFileInput(updatedFiles) {
        const dataTransfer = new DataTransfer();
        updatedFiles.forEach(file => dataTransfer.items.add(file));
        document.getElementById('imagenes').files = dataTransfer.files;
    }

    function renderPreview() {
        const previewContainer = document.getElementById('preview');
        previewContainer.innerHTML = '';
        selectedFiles.forEach((file, index) => {
            if (file.type.startsWith('image/')) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const imageContainer = document.createElement('div');
                    imageContainer.classList.add('image-container');
                    
                    const img = document.createElement('img');
                    img.src = e.target.result;
                    img.style.maxWidth = '150px';
                    img.style.margin = '10px';
                    
                    const deleteIcon = document.createElement('span');
                    deleteIcon.classList.add('delete-icon');
                    deleteIcon.innerHTML = '&times;';
                    deleteIcon.onclick = function() {
                        selectedFiles.splice(index, 1);
                        imageContainer.remove();
                        updateFileInput(selectedFiles);
                        renderPreview();
                    };

                    imageContainer.appendChild(img);
                    imageContainer.appendChild(deleteIcon);
                    previewContainer.appendChild(imageContainer);
                };
                reader.readAsDataURL(file);
            }
        });
    }
</script>