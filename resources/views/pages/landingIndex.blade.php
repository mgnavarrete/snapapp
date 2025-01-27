@extends('layouts.landing-master')

@section('styles')
 
        <!-- SWIPERJS CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/swiper/swiper-bundle.min.css')}}">
      
@endsection

@section('content')

                    <!-- Start:: Section-1 -->
                    <div class="landing-banner" id="home">
                        <section class="section">
                            <div class="container main-banner-container pb-lg-0">
                                <div class="row">
                                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-8">
                                        <div class="py-lg-5">
                                            <div class="mb-3">
                                            
                                            </div>
                                            <p class="landing-banner-heading mb-3">Comparte tus imágenes con los novios, familia y amigos.</p>
                                            <div class="fs-16 mb-5 text-fixed-white op-7">Snap by Minttu.</div>


                                        </div>
                                    </div>
                                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-4">
                                        <div class="text-end landing-main-image landing-heading-img">
                                            <img src="{{asset('build/assets/images/takeImg.png')}}" alt="" class="img-fluid">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <!-- End:: Section-1 -->

                    <!-- Start:: Section-3 -->
                    <section class="section " id="about">
                        <div class="container text-center">
                            <p class="fs-12 fw-semibold text-success mb-1"><span class="landing-section-heading">Eventos</span></p>
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
                                                    <img src="{{asset('build/assets/images/wedding.png')}}" alt="image" class="featur-icon" style="width: 200px; height: 200px;">
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