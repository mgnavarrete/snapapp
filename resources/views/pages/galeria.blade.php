@extends('layouts.custom-master')

@section('styles')
   <link rel="stylesheet" href="{{asset('build/assets/libs/swiper/swiper-bundle.min.css')}}">
@endsection

@section('content')
<nav class="navbar navbar-expand-lg navbar-dark-transparent">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{route('eventoShow', $id_evento)}}"><img src="{{asset('build/assets/images/brand-logos/desktop-logo.png')}}" alt=""></a>
        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse" id="navbarColor03" style="">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="javascript:void(0);"> Todas las fotos y videos</a>
                </li>
                @foreach ($secciones as $seccion)
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);">{{ $seccion->nombre }}</a>
                </li>
                @endforeach
              
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Buscar Fotógrafo" aria-label="Search">
                <button class="btn btn-dark" type="submit">Buscar</button>
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
        <div class="col-lg-3 col-md-3 col-sm-6 col-12">
            @php
            
                $fileId = $imagen->id_google;
                $directLink = "https://drive.google.com/uc?export=view&id=" . $fileId;
            @endphp
            <a href="{{$imagen->link}}" class="glightbox card" data-gallery="gallery1">
                <img src="https://drive.minttu.cl/proxy?url={{ urlencode($directLink) }}" alt="image" style="width: 100%; height: 100px; object-fit: cover;">
            </a>
        </div>
        @endforeach
    </div>






    

    <div class="text-center landing-main-footer py-2 mb-2">
        <span class="text-muted fs-14 mb-5"> Designed with ❤️ by Menta
        </span>
    </div>
    
</div>


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