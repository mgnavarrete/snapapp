<!DOCTYPE html>
<html lang="es">
<head style="background-color: #000;">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Presentación de Imágenes y Videos</title>
    <link rel="stylesheet" href="{{ asset('build/assets/libs/swiper/swiper-bundle.min.css') }}">
    <style>
        .swiper-container {
            width: 100%;
            height: 100%;
        }
        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        img, video {
            max-width: 100%;
            max-height: 100%;
        }
    </style>
</head>
<body style="background-color: #000;">
    <div class="swiper-container  justify-content-center d-flex align-items-center" style="background-color: #000;">
        <div class="swiper-wrapper" style="background-color: #000;">
            @foreach($imagenes as $imagen)
                <div class="swiper-slide h-100 justify-content-center d-flex align-items-center" style="background-color: #000;">
                    <div class="col-12">
                        @php
                            $fileId = $imagen->id_google;
                            $directLink = "https://drive.google.com/uc?export=view&id=" . $fileId;
                        @endphp
            
                        <a href="" class="glightbox card w-100" style="height: 500px;" data-gallery="gallery1">
                            @if($imagen->tipo === 'imagen')
                            <img src="https://drive.minttu.cl/proxy?url={{ urlencode($directLink) }}" alt="image" style="width: 100%; height: 800px; object-fit: cover;">
                          
                               
                            @endif
                        </a>
                    </div> 

                </div>
            @endforeach
        </div>
    </div>

    <script src="{{ asset('build/assets/libs/swiper/swiper-bundle.min.js') }}"></script>
    <script>
        var swiper = new Swiper('.swiper-container', {
            loop: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
        });

        // Aquí puedes implementar la lógica para actualizar las imágenes en tiempo real
        // usando WebSockets o AJAX para obtener nuevas imágenes y actualizar el swiper.

        setInterval(function() {
            fetch('/nuevas-imagenes')
                .then(response => response.json())
                .then(data => {
                    // Lógica para actualizar el swiper con las nuevas imágenes
                    data.forEach(imagen => {
                        var slide = document.createElement('div');
                        slide.classList.add('swiper-slide');
                        if (imagen.tipo === 'imagen') {
                            slide.innerHTML = `<div class="col-12">
                        @php
                            $fileId = $imagen->id_google;
                            $directLink = "https://drive.google.com/uc?export=view&id=" . $fileId;
                        @endphp
            
                        <a href="" class="glightbox card w-100" style="height: 500px;" data-gallery="gallery1">
                            @if($imagen->tipo === 'imagen')
                            <img src="https://drive.minttu.cl/proxy?url={{ urlencode($directLink) }}" alt="image" style="width: 100%; height: 800px; object-fit: cover;">
                          
                               
                            @endif
                        </a>
                    </div> `;
                        } 
                        swiper.appendSlide(slide);
                    });
                });
        }, 5000); // Verifica cada 5 segundos
    </script>
</body>
</html>
