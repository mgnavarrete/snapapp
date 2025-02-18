<!-- Agregar Comentario -->
<div class="modal fade" id="agregarComentario" tabindex="-1" aria-labelledby="agregarComentarioModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="agregarComentarioModal">Deja Tu Saludo</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                    <form action="{{ route('comentarios.create', $evento->id_evento) }}" method="POST" id="agregarComentarioForm">
                    @csrf
        
                    <!-- Nombre -->
                    <div class="col-xl-12 mb-3">
                        <label for="nombre" class="form-label text-default">Nombre</label>
                        <input type="text" class="form-control form-control-lg bg-outline-primary" id="nombre" name="nombre" placeholder="Nombre" required>
                    </div>

                    <!-- Comentario -->
                    <div class="col-xl-12 mb-3">
                        <label for="comentario" class="form-label text-default">Comentario</label>
                        <textarea class="form-control form-control-lg bg-outline-primary" id="comentario" name="comentario" placeholder="Deja tu saludo a los novios" required></textarea>
                    </div>
                
                    <div class="modal-footer">
                        <div class="spinner-border text-primary d-none" role="status" id="spinnerComentario">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                        <button type="submit" class="btn btn-secondary" id="guardarBtnComentario">Enviar Saludo</button>
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                        
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
        document.getElementById('agregarComentarioForm').addEventListener('submit', function() {
            // Ocultar el botón de guardar
            document.getElementById('guardarBtnComentario').classList.add('d-none');
            // Mostrar el spinner
            document.getElementById('spinnerComentario').classList.remove('d-none');
        });

</script>