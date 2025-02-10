@extends('layouts.custom-master')

@section('styles')
   <link rel="stylesheet" href="{{asset('build/assets/libs/swiper/swiper-bundle.min.css')}}">
@endsection

@section('content')
@php
    \Carbon\Carbon::setLocale('es');
@endphp

<nav class="navbar navbar-expand-lg navbar-dark-transparent">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{route('eventoShow', $id_evento)}}"><img src="{{asset('build/assets/images/brand-logos/desktop-logo.png')}}" alt=""></a>
        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse" id="navbarColor03" style="">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="javascript:void(0);" data-seccion="todos"> Todos </a>
                </li>
                @foreach ($secciones as $seccion)
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);" data-seccion="{{ $seccion->id_seccion }}">{{ $seccion->nombre }}</a>
                </li>
                @endforeach
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" id="searchInput" placeholder="Buscar Fotógrafo" aria-label="Search">
            </form>
        </div>
    </div>
</nav>

@php
    \Carbon\Carbon::setLocale('es');
@endphp

<div class="container-fluid p-0 m-0">
    <div class="row m-3">
        @foreach ($imagenes as $imagen)
        @php
            $fecha_captura = \Carbon\Carbon::parse($imagen->fecha_captura);


            foreach ($secciones as $seccion) {
                if ($fecha_captura->between(\Carbon\Carbon::parse($seccion->fecha_inicio), \Carbon\Carbon::parse($seccion->fecha_final))) {
                    $seccion_id = $seccion->id_seccion;
                }
            }

        @endphp
        <script>
            console.log({{ $seccion_id }});
        </script>
        <div class="col-lg-3 col-md-3 col-sm-3 col-6" data-fotografo="{{ $imagen->nombre }}" data-seccion="{{ $seccion_id }}">
            @php
                $fileId = $imagen->id_google;



                $directLink = "https://drive.google.com/uc?export=view&id=" . $fileId;
            @endphp
            <a href="" class="glightbox card" data-gallery="gallery1" data-bs-toggle="modal" data-bs-target="#fileShow{{ $imagen->id_imagen }}">
                <img src="https://drive.minttu.cl/proxy?url={{ urlencode($directLink) }}" alt="image" style="width: 100%; height: 200px; object-fit: cover;">
            </a>
        </div>
        @endforeach
    </div>






    

    <div class="text-center landing-main-footer py-2 mb-2">
        <span class="text-muted fs-14 mb-5"> Designed with ❤️ by Menta
        </span>
    </div>
    
</div>

@include('pages.modals.fileShow')
{{-- Mostrar mensaje de éxito --}}
@if(session('success'))
    <script>
        alert("{{ session('success') }}");
    </script>
@endif

{{-- Mostrar mensaje de error --}}
@if($errors->any())
    <script>
        alert("{{ $errors->first() }}");
    </script>
@endif

<script>
    document.getElementById('searchInput').addEventListener('input', filterImages);

    function filterImages() {
        const searchValue = document.getElementById('searchInput').value.toLowerCase();
        const images = document.querySelectorAll('[data-fotografo]');

        images.forEach(image => {
            const fotografo = image.getAttribute('data-fotografo').toLowerCase();
            if (fotografo.includes(searchValue)) {
                image.style.display = 'block';
            } else {
                image.style.display = 'none';
            }
        });
    }

    document.querySelectorAll('.nav-link').forEach(link => {
        link.addEventListener('click', function() {
            // Remover la clase 'active' de todos los enlaces
            document.querySelectorAll('.nav-link').forEach(navLink => {
                navLink.classList.remove('active');
            });

            // Añadir la clase 'active' al enlace clicado
            this.classList.add('active');

            const seccionId = this.getAttribute('data-seccion');
            filterBySeccion(seccionId);
        });
    });

    function filterBySeccion(seccionId) {
        const images = document.querySelectorAll('[data-fotografo]');
        images.forEach(image => {
            const imageSeccionId = image.getAttribute('data-seccion');
            if (seccionId === 'todos' || imageSeccionId === seccionId) {
                image.style.display = 'block';
            } else {
                image.style.display = 'none';
            }
        });
    }
</script>

@endsection


@section('scripts')


        <!-- APEX CHARTS JS -->
        <script src="{{asset('build/assets/libs/apexcharts/apexcharts.min.js')}}"></script>

        <!-- CHARTJS CHART JS -->
        <script src="{{asset('build/assets/libs/chart.js/chart.min.js')}}"></script>

        <!-- CRM-Dashboard -->
        @vite('resources/assets/js/crm-dashboard.js')

        <!-- SWIPER JS -->
        <script src="{{asset('build/assets/libs/swiper/swiper-bundle.min.js')}}"></script>

        <!-- INTERNAL SWIPER JS -->
        @vite('resources/assets/js/swiper.js')

@endsection