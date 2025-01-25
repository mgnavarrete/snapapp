<!DOCTYPE html>
<html lang="es" dir="ltr" data-nav-layout="vertical" data-theme-mode="light" data-header-styles="light" data-menu-styles="dark" data-toggled="close">

    <head>

        <!-- META DATA -->
		<meta charset="UTF-8">
        <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=no'>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="Description" content="Laravel Bootstrap Responsive Admin Web Dashboard Template">
        <meta name="Author" content="Spruko Technologies Private Limited">
        <meta name="keywords" content="dashboard bootstrap, laravel template, admin panel in laravel, php admin panel, admin panel for laravel, admin template bootstrap 5, laravel admin panel, admin dashboard template, hrm dashboard, vite laravel, admin dashboard, ecommerce admin dashboard, dashboard laravel, analytics dashboard, template dashboard, admin panel template, bootstrap admin panel template">
        
        <!-- TITLE -->
		<title> Minttu </title>

        <!-- FAVICON -->
        <link rel="icon" href="{{asset('build/assets/images/brand-logos/favicon.png')}}" type="image/x-icon">

        <!-- BOOTSTRAP CSS -->
	    <link  id="style" href="{{asset('build/assets/libs/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

        <!-- ICONS CSS -->
        <link href="{{asset('build/assets/icon-fonts/icons.css')}}" rel="stylesheet">
        
        <!-- APP SCSS -->
        @vite(['resources/sass/app.scss'])


        @include('layouts.components.styles')

        <!-- MAIN JS -->
        <script src="{{asset('build/assets/main.js')}}"></script>

        @yield('styles')

	</head>

	<body>
        <div class="container-fluid">

            <!-- Start::row-1 -->
            <div class="row justify-content-center">
                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-xm-12">
                    <div class="card custom-card overflow-hidden">
                        <div class="card-body p-0">
                            <div class="contact-page-banner" style="background-image: url('https://media.licdn.com/dms/image/D5612AQF06xr50Pk7WQ/article-cover_image-shrink_720_1280/0/1710303074532?e=2147483647&v=beta&t=ElB_r1t9zp97aScPqQlFKnFAgGsoKvIdhzvKjqv2lFU'); background-size: cover; background-position: center;">
                                <div class="text-center">
                                    <h3 class="fw-semibold text-fixed-white">¡ Bienvenido a Minttu !</h3>
                                    <h6 class="text-fixed-white mb-4 px-sm-0 px-3">Ponte en contacto con nosotros para más información.</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-10 col-xl-10 col-lg-10 col-md-10 col-sm-10 col-12">
                    <div class="row">
                        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            <div class="card custom-card contactus-form overflow-hidden">
                                <div class="card-header">
                                    <div class="card-title">
                                        Contactanos !
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row gy-3">
                                        <div class="col-xl-6">
                                            <label for="contact-address-firstname" class="form-label">Nombre :</label>
                                            <input type="text" class="form-control form-control-light" id="contact-address-firstname" placeholder="Enter Name">
                                        </div>
                                        <div class="col-xl-6">
                                            <label for="contact-address-lastname" class="form-label">Apellidos :</label>
                                            <input type="text" class="form-control form-control-light" id="contact-address-lastname" placeholder="Enter Name">
                                        </div>
                                        <div class="col-xl-6">
                                            <label for="contact-address-phone" class="form-label">Teléfono :</label>
                                            <input type="text" class="form-control form-control-light" id="contact-address-phone" placeholder="Enter Phone No">
                                        </div>
                                        <div class="col-xl-6">
                                            <label for="contact-address-email" class="form-label">Correo :</label>
                                            <input type="email" class="form-control form-control-light" id="contact-address-email" placeholder="Enter Email Id">
                                        </div>
                                        <div class="col-xl-12">
                                            <label for="contact-mail-message" class="form-label">Mensaje :</label>
                                            <textarea class="form-control form-control-light" id="contact-mail-message" rows="2"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="text-center">
                                        <button class="btn btn-primary-light btn-wave" href="{{route('index')}}">Enviar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End::row-1 -->

        </div>
        @include('layouts.components.scripts')

        @yield('scripts')

        <!-- STICKY JS -->
		<script src="{{asset('build/assets/sticky.js')}}"></script>

        <!-- APP JS -->
		<!--@vite('resources/js/app.js')-->


        <!-- CUSTOM-SWITCHER JS -->
        @vite('resources/assets/js/custom-switcher.js')

        
        <!-- END SCRIPTS -->

	</body>
</html>

