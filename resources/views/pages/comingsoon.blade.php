@extends('layouts.custom-master')

@section('styles')
 
      
@endsection

@section('content')

@section('error-body')
<body class="bg-white">
@endsection

        <div class="row authentication coming-soon mx-0">

            <div class="col-xxl-12 col-xl-12 col-lg-12 col-12">
                <div class="authentication-cover">
                    <div class="aunthentication-cover-content text-center">
                        <div class="row justify-content-center align-items-center h-100">
                            <div class="col-xxl-6 col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12">
                                <div class="mb-2">
                                    <a href="{{url('index')}}">
                                        <img style="width: 400px;" src="{{asset('build/assets/images/brand-logos/desktop-logo.png')}}" alt="" class="authentication-brand">
                                    </a>
                                </div>
     
                                <h1 class="fw-bold mb-3">Coming Soon</h1>
                                <p class="mb-4">MINTTU ya viene en camino, ingresa tu correo para recibir las últimas notificaciones y actualizaciones sobre el sitio web.</p>
                                <div class="input-group mb-5">
                                    <input type="email" class="form-control form-control-lg" placeholder="info@minttu.cl" aria-label="info@minttu.cl" aria-describedby="button-addon2">
                                    <button class="btn btn-primary" type="button" id="button-addon2">Suscríbete</button>
                                </div>
                                <div class="row mt-4 mb-5 gy-xxl-0 gy-3 justify-content-center" id="timer">
                                </div>
                                <div class="mt-5">
                                    <div class="btn-list">
                                        <button class="btn btn-icon btn-primary btn-wave">
                                            <i class="ri-facebook-line fw-bold"></i>
                                        </button>
                                        <button class="btn btn-icon btn-secondary btn-wave">
                                            <i class="ri-twitter-line fw-bold"></i>
                                        </button>
                                        <button class="btn btn-icon btn-warning btn-wave">
                                            <i class="ri-instagram-line fw-bold"></i>
                                        </button>
                                        <button class="btn btn-icon btn-success btn-wave">
                                            <i class="ri-github-line fw-bold"></i>
                                        </button>
                                        <button class="btn btn-icon btn-danger btn-wave">
                                            <i class="ri-youtube-line fw-bold"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

@endsection

@section('scripts')

        <!-- INTERNAL COMING SOON JS -->
        <script src="{{asset('build/assets/coming-soon.js')}}"></script>

@endsection
