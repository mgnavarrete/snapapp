@extends('layouts.custom-master')

@section('styles')
    <style>
        .custom-banner-background {
            background-image: url('{{ asset('build/assets/images/eventos/civil.jpg') }}');
            background-size: cover;
            width: 100%;
            height: 600px;
            background-color: white;
            opacity: 1;
        }

        .custom-aboutus-banner-content {
            opacity: 1;
            display: flex;
            align-items: flex-start;
            justify-content: flex-start;
            padding-top: 5px;
            padding-left: 5px;
            
        }

        .fixed-height-card {
            height: 500px; /* Establece la altura fija de 800px */

        }

        .fixed-position-card {
            position: absolute;
            top: 550px;
            left: 0;
        }
    </style>
   <link rel="stylesheet" href="{{asset('build/assets/libs/swiper/swiper-bundle.min.css')}}">
@endsection

@section('content')
@php
    \Carbon\Carbon::setLocale('es');
@endphp

<div class="container-fluid p-0 m-0">

    <div class="row">
        <div class="aboutus-banner custom-banner-background mb-5">
            <div class="aboutus-banner-content custom-aboutus-banner-content">
                <div class="row">
                    <div class="col-xxl-12 col-xl-12 col-12 col-md-12 col-sm-12 col-12">
                        <div class="row">
                            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="p-0 text-start mb-4">
                                    <h6 class="fw-semibold text-fixed-white pb-4">
                                        <span class="about-heading-white">Erwin & Fran</span>
                                    </h6>
                                    <h2 class="fw-semibold mb-2 text-fixed-white">
                                    {{ $evento->nombre }}
                                    </h2>
                                    <p class="text-fixed-white">
                                    {{ ucfirst(\Carbon\Carbon::parse($evento->fecha_inicio)->translatedFormat('j \d\e F \d\e Y')) }} 
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12 about-company-stats mb-0 fixed-position-card">
                        <div class="row justify-content-center">
                            <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-8 col-sm-8 col-11 ">
                                <div class="card custom-card text-default shadow border ">
                                    <div class="card-body p-0">
                                        <div class="row align-items-center justify-content-center">
                                            <div class="col-xl-4 col-xxl-4 col-lg-4 col-md-4 col-sm-4 col-4 ">
                                                <div class="text-center p-2 w-100 h-100 d-flex align-items-center justify-content-center">
                                                    <a href="" data-bs-toggle="modal" data-bs-target="#agregarImagen">
                                                    <div class="d-flex flex-column align-items-center mb-1">
                                                        
                                                        <i class="bx bx-upload mt-1 mb-2" style="font-size: 40px; color: var(--primary-color);" title="Subir Imágenes/Videos"></i>
                                                        <span style="font-size:12px;">Subir</span>
                                                    </div>
                                                </a>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-xxl-4 col-lg-4 col-md-4 col-sm-4 col-4 ">
                                                <div class="text-center p-1 w-100 h-100 d-flex align-items-center justify-content-center">
                                                    <a href="{{ route('galeria', ['id' => $evento->id_evento]) }}">
                                                        <div class="d-flex flex-column align-items-center mb-1">
                                                            <i class="bx bx-images mt-1 mb-2" style="font-size: 40px; color: var(--primary-color);" title="Ver Galería"></i>
                                                            <span style="font-size:12px;">Ver Galería</span>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-xxl-4 col-lg-4 col-md-4 col-sm-4 col-4">
                                                <div class="text-center p-1 w-100 h-100 d-flex align-items-center justify-content-center">
                                                    <a href="" data-bs-toggle="modal" data-bs-target="#agregarComentario">
                                                    <div class="d-flex flex-column align-items-center mb-1">
                                                            
                                                            <i class="bx bx-chat mt-1 mb-2" style="font-size: 40px; color: var(--primary-color);" title="Comentarios"></i>
                                                        
                                                        <span style="font-size:12px;">Saluda a los Novios</span>
                                                    </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row d-flex flex-row flex-wrap ">

            <div class="card custom-card w-100 ms-2" style="background-color: transparent;">
                <div class="card-header">
                    <h5 class="card-title">Saludos de nuestros invitados</h5>
                </div>
                <div class="card-body p-0 d-flex justify-content-center" style="height: 500px; overflow-y: auto;">
                    <ul class="list-unstyled mb-0 notification-container w-100">
                        @foreach ($comentarios as $comentario)
                        <li class="d-flex justify-content-center w-100">
                            <div class="card custom-card un-read w-100">
                                <div class="card-body p-3">
                                    <a href="javascript:void(0);">
                                        <div class="d-flex align-items-top mt-0 flex-wrap">
                                            <div class="lh-1">
                                                <span class="avatar avatar-md online me-3 avatar-rounded" style="background-color: #f0f0f0; display: flex; align-items: center; justify-content: center; font-weight: bold; color: #333;">
                                                    {{ strtoupper(substr($comentario->nombre, 0, 1)) }}{{ strtoupper(substr(explode(' ', $comentario->nombre)[1] ?? '', 0, 1)) }}
                                                </span>
                                            </div>
                                            <div class="flex-fill">
                                                <div class="d-flex align-items-center">
                                                    <div class="mt-sm-0 mt-2">
                                                        <p class="mb-0 fs-14 fw-semibold">{{ $comentario->nombre }}</p>
                                                        <p class="mb-0 text-muted">{{ $comentario->contenido }}</p>
                                                    
                                                    </div>
                                                    <div class="ms-auto">
                                                        <span class="float-end badge bg-light text-muted">
                                                            {{ ucfirst(\Carbon\Carbon::parse($comentario->created_at)->diffForHumans()) }}
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>    
                                </div>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
           
        </div>

        <div class="card custom-card m-2 p-0" style="background-color: transparent;">
            <div class="card-header">
                <h5 class="card-title">Fotos y videos</h5>
            </div>
            <div class="card-body d-flex justify-content-center p-0" style="overflow-x: auto;">
                <div class="swiper-container p-0 me-3">
                    <div class="swiper-wrapper p-0 me-3">
                        @foreach ($secciones as $seccion)
                        @php
                        $numImg = 0;
                        $imagenesSeccion = [];
                            foreach ($imagenes as $imagen) {
                                $fecha_captura = \Carbon\Carbon::parse($imagen->fecha_captura);
                                if ($fecha_captura->between(\Carbon\Carbon::parse($seccion->fecha_inicio), \Carbon\Carbon::parse($seccion->fecha_final))) {
                                    $numImg++;
                                    $imagenesSeccion[] = $imagen;
                                }
                            }
     
                        @endphp
     
                        <div class="swiper-slide " style="flex: 0 0 350px;">
                            

                            <div class="card custom-card overlay-card m-2 fixed-height-card">  
                                <div id="carousel{{$seccion->id_seccion}}" class="carousel slide h-100" data-bs-ride="carousel">
                                    <div class="carousel-indicators h-100">
                                        <button type="button" data-bs-target="#carousel{{$seccion->id_seccion}}"
                                            data-bs-slide-to="0" class="active" aria-current="true"
                                            aria-label="Slide{{$seccion->id_seccion}} 1"></button>
    
                                        @foreach ($imagenesSeccion as $imagen)                                                                                
                                        <button type="button" data-bs-target="#carousel{{$seccion->id_seccion}}"
                                            data-bs-slide-to="{{ $loop->index }}" aria-label="Slide{{$seccion->id_seccion}} {{ $loop->index + 1 }}"></button>
                                        @endforeach
    
                                    </div>
                                    <div class="carousel-inner h-100">
                                        <div class="carousel-item active h-100">                     
                        
                                            <img src="{{ asset($seccion->path_img) }}" class="card-img" alt="..." style="object-fit: cover; width: 100%; height: 100%;">

                                        </div>
                                        @foreach ($imagenesSeccion as $imagen)
                                        @if($imagen->tipo === 'imagen')
                                        <div class="carousel-item h-100">
                                            @php
                                            $fileId = $imagen->id_google;
                                            $directLink = "https://drive.google.com/uc?export=view&id=" . $fileId;
                                            @endphp   
                                                <img src="https://drive.minttu.cl/proxy?url={{ urlencode($directLink) }}" class="card-img" alt="..." style="object-fit: cover; width: 100%; height: 100%;">

                                        </div>
                                        @endif
                                        @endforeach
                                    </div>
                                </div>

                                <div class="card-img-overlay d-flex flex-column p-0">
                                    <div class="card-body">
                                        
                                        <div class="card-text mt-5">
                                            
                                            <h2 class="text-fixed-white mt-5 ms-5" style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 1); font-size: 30px;">{{ $seccion->nombre }}</h2>
                                            <p class="text-fixed-white ms-5" style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 1); font-size: 20px;">
                                                {{ \Carbon\Carbon::parse($seccion->fecha_inicio)->format('H:i') }} - 
                                                {{ \Carbon\Carbon::parse($seccion->fecha_final)->format('H:i') }}
                                            </p>
                                            
                                        </div>
                                        
                                    </div>
                    
                                    <div class="card-footer text-fixed-white">{{$numImg}} fotos y videos subidos.</div>
                                </div>


                            </div>

                        </div>
       
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        
    </div>

    <div class="text-center landing-main-footer py-2 mb-2">
        <span class="text-muted fs-14 mb-5"> Designed with ❤️ by Menta
        </span>
    </div>
    
</div>


{{-- Mostrar mensaje de éxito --}}
{{-- @if(session('success'))
    <script>
        alert("{{ session('success') }}");
    </script>
@endif --}}

{{-- Mostrar mensaje de error --}}
@if($errors->any())
    <script>
        alert("{{ $errors->first() }}");
    </script>
@endif

@include('pages.modals.addComentario')
@include('pages.modals.addFiles')

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

        <script>
            var swiper = new Swiper('.swiper-container', {
                slidesPerView: 'auto',
                spaceBetween: 10,
                freeMode: true,
            });
        </script>
@endsection