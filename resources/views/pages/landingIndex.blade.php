@extends('layouts.landing-master')

@section('styles')
 
        <!-- SWIPERJS CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/swiper/swiper-bundle.min.css')}}">
      
@endsection

@section('content')

                    <!-- Start:: Section-3 -->
                    <section class="section " id="about">
                        <div class="container text-center">
                            <p class="fs-12 fw-semibold text-success mb-1"><span class="landing-section-heading">Eventos Activos</span></p>
                            <h2 class="fw-semibold mb-2 text-fixed ">Erwin & Fran</h2>
                            <div class="row justify-content-center">
                                <div class="col-xl-7">
                                    <p class="text-fixed op-8 fs-15 mb-3 fw-normal">Comparte tus imágenes con los novios</p>
                                </div>
                            </div>
                            <div class="text-start">
                                <div class="justify-content-center">
                                    <div class="">
                                        <div class="feature-logos mt-sm-5 flex-wrap" >
                                            @foreach ($eventos as $evento)
                                            <div class="ms-sm-5 ms-2 text-center">
                                                <a href="{{route('eventoShow', $evento->id_evento)}}">
                                                    <img src="{{asset('build/assets/images/wedding.png')}}" alt="image" class="featur-icon" style="width: 150px; height: 150px;">
                                                    <h5 class="mt-3 text-fixed" style="font-size: 1.5rem;">{{$evento->nombre}}</h5>
                                                </a>
                                            </div>                    
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-pagination mt-4"></div>
                            </div>
                        </div>
                    </section>
                    <!-- End:: Section-3 -->

@endsection

@section('scripts')

        <!-- SWIPER JS -->
        <script src="{{asset('build/assets/libs/swiper/swiper-bundle.min.js')}}"></script>

        <!-- INTERNAL LANDING JS -->
        @vite('resources/assets/js/landing.js')


@endsection