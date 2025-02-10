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
                        <img src="https://drive.minttu.cl/proxy?url={{ urlencode($directLink) }}" class="card-img-top w-100" alt="..." >

                        <div class="card-img-overlay d-flex flex-column p-0 over-content-bottom">
                            <div class="card-footer text-fixed-white">Subida  {{ (\Carbon\Carbon::parse($imagen->created_at)->diffForHumans()) }} | Fotógrafo: {{ $imagen->nombre }}</div>
                        </div>
                    </div>
                </div>

                <div class="d-flex justify-content-between">
                    <i class="bx bx-left-arrow-alt ms-5" style="font-size: 50px; color: var(--primary-color); {{ $index === 0 ? 'pointer-events: none; opacity: 0.5;' : '' }}" title="Anterior"
                       data-bs-toggle="modal" 
                       data-bs-target="#fileShow{{ $index > 0 ? $imagenes[$index - 1]->id_imagen : $imagen->id_imagen }}"></i>
                    <a href="{{ $imagen->link}}" class="bx bx-cloud-download mb-2" style="font-size: 50px; color: var(--primary-color);" title="Descargar"></a>
                    <i class="bx bx-right-arrow-alt me-5" style="font-size: 50px; color: var(--primary-color); {{ $index === count($imagenes) - 1 ? 'pointer-events: none; opacity: 0.5;' : '' }}" title="Siguiente"
                       data-bs-toggle="modal" 
                       data-bs-target="#fileShow{{ $index < count($imagenes) - 1 ? $imagenes[$index + 1]->id_imagen : $imagen->id_imagen }}"></i>
                </div>
                
            </div>
        </div>
    </div>
</div>
@endforeach