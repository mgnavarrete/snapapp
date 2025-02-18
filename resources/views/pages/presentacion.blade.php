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
    <div class="swiper-container h-100 justify-content-center d-flex align-items-center" style="background-color: #000;">
        <div class="swiper-wrapper" style="background-color: #000;">
            @foreach($imagenes as $imagen)
                <div class="swiper-slide h-100 justify-content-center d-flex align-items-center" style="background-color: #000;">

                     @php
                            $fileId = $imagen->id_google;
                            $directLink = "https://drive.google.com/uc?export=view&id=" . $fileId;
                        @endphp                      
                        @if($imagen->tipo === 'video')
                    <video style="height: 100%; object-fit: cover;" controls>
                        <source src="https://drive.minttu.cl/proxy?url={{ urlencode($directLink) }}" type="video/mp4">
                        Tu navegador no soporta la etiqueta de video.
                    </video>
                @else
                    <img src="https://drive.minttu.cl/proxy?url={{ urlencode($directLink) }}" alt="image" style="height: 100%; object-fit: cover;">
                @endif
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
                        if (imagen.tipo === 'video') {
                            slide.innerHTML = `<video controls><source src="${imagen.link}" type="video/mp4">Tu navegador no soporta la etiqueta de video.</video>`;
                        } else {
                            slide.innerHTML = `<img src="${imagen.link}" alt="Imagen">`;
                        }
                        swiper.appendSlide(slide);
                    });
                });
        }, 5000); // Verifica cada 5 segundos
    </script>
</body>
</html>
