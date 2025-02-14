@foreach($imagenes as $index => $imagen)
<!-- File Show -->
<div class="modal fade" id="fileShow{{ $imagen->id_imagen }}" tabindex="-1" aria-labelledby="fileShowModal{{ $imagen->id_imagen }}" aria-hidden="true">
    <div class="modal-dialog" style="max-width: 1000px;">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="fileShowModal{{ $imagen->id_imagen }}">Recuerdos {{$evento->nombre}} </h5>
                <br>
                
            
                
                <br>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>


            <div class="modal-body">

               
                <div class="col-12">
                    <div class="card custom-card overlay-card">
                        @php
                            $fileId = $imagen->id_google;
                            $directLink = "https://drive.google.com/uc?export=view&id=" . $fileId;
                        @endphp                      
                        @if($imagen->tipo === 'video')
                    <video style="width: 100%; object-fit: cover;" controls>
                        <source src="https://drive.minttu.cl/proxy?url={{ urlencode($directLink) }}" type="video/mp4">
                        Tu navegador no soporta la etiqueta de video.
                    </video>
                @else
                    <img src="https://drive.minttu.cl/proxy?url={{ urlencode($directLink) }}" alt="image" style="width: 100%; object-fit: cover;">
                @endif
                        <div class="card-img-overlay d-flex flex-column p-0 over-content-bottom">
                            <div class="card-footer text-fixed-white">Subida  {{ (\Carbon\Carbon::parse($imagen->created_at)->diffForHumans()) }} | Fotógrafo: {{ $imagen->nombre }}</div>
                        </div>
                    </div>
                </div>

                <div class="d-flex justify-content-center">
                    <a href="{{ $imagen->link}}" class="bx bx-cloud-download mb-2" style="font-size: 50px; color: var(--primary-color);" title="Descargar"></a>
                </div>
                
            </div>
        </div>
    </div>
</div>
@endforeach