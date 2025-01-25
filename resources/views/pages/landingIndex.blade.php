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
                                    <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-8">
                                        <div class="py-lg-5">
                                            <div class="mb-3">
                                            <h5 class="fw-semibold text-fixed-white op-9">DESARROLLO A TU MEDIDA</h5>
                                            </div>
                                            <p class="landing-banner-heading mb-3">Diseña tu presente pensando en el futuro con <span class="text-primary">MINTTU!</span></p>
                                            <div class="fs-16 mb-5 text-fixed-white op-7">MINTTU - Fusionamos desarrollo web, inteligencia artificial y las últimas tecnologías para crear soluciones que transforman ideas en herramientas reales y efectivas.</div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-4">
                                        <div class="text-end landing-main-image landing-heading-img">
                                            <img src="{{asset('https://laravelui.spruko.com/ynex/build/assets/images/media/landing/1.png')}}" alt="" class="img-fluid">
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
                            <p class="fs-12 fw-semibold text-success mb-1"><span class="landing-section-heading">¿QUÉ ES MINTTU?</span></p>
                            <h3 class="fw-semibold mb-2">Soluciones tecnológicas avanzadas y personalizadas</h3>
                            <div class="row justify-content-center">
                                <div class="col-xl-7">
                                    <p class="text-muted fs-15 mb-3 fw-normal">MINTTU es una empresa pionera en el desarrollo de soluciones tecnológicas avanzadas, especializada en la integración de inteligencia artificial, visión por computador y machine learning. Nos dedicamos a transformar ideas en herramientas efectivas que resuelven los desafíos únicos de nuestros clientes.</p>
                                </div>
                            </div>
                            <div class="row justify-content-between align-items-center mx-0">
                            <div class="col-xxl-5 col-xl-5 col-lg-5 customize-image text-center">
                                <div class="text-lg-end">
                                    <img src="{{asset('https://laravelui.spruko.com/ynex/build/assets/images/media/landing/3.png')}}" alt="" class="img-fluid">
                                </div>
                            </div>
                            <div class="col-xxl-6 col-xl-6 col-lg-6 pt-5 pb-0 px-lg-2 px-5 text-start">
                                <h5 class="text-lg-start fw-semibold mb-0">Innovación en desarrollo web y tecnologías avanzadas</h5>
                                <p class=" text-muted">Nos especializamos en el desarrollo de aplicaciones web que incorporan las últimas tecnologías, garantizando soluciones eficientes, escalables y de alta calidad que se adaptan a las necesidades específicas de nuestros clientes.</p>
                                <div class="row">
                                    <div class="col-12 col-md-12">
                                        <div class="d-flex">
                                            <span>
                                                <i class='bx bxs-badge-check text-primary fs-18'></i>
                                            </span>
                                            <div class="ms-2">
                                                <h6 class="fw-semibold mb-0">Aplicación de inteligencia artificial y machine learning</h6>
                                                <p class=" text-muted">Integramos inteligencia artificial y machine learning para ofrecer soluciones innovadoras que optimizan procesos y mejoran la eficiencia operativa.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-12">
                                        <div class="d-flex">
                                            <span>
                                                <i class='bx bxs-badge-check text-primary fs-18'></i>
                                            </span>
                                            <div class="ms-2">
                                                <h6 class="fw-semibold mb-0">Visión por computador para soluciones avanzadas</h6>
                                                <p class=" text-muted">Utilizamos visión por computador para desarrollar aplicaciones que ofrecen capacidades avanzadas de análisis y reconocimiento visual.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-12">
                                        <div class="d-flex">
                                            <span>
                                                <i class='bx bxs-badge-check text-primary fs-18'></i>
                                            </span>
                                            <div class="ms-2">
                                                <h6 class="fw-semibold mb-0">Desarrollo web personalizado</h6>
                                                <p class=" text-muted">Creamos aplicaciones web personalizadas que se alinean con los objetivos de negocio de nuestros clientes, utilizando las metodologías de desarrollo más avanzadas.</p>
                                            </div>
                                        </div>
                                </div>
                            </div> 
                            </div>
                        </div> 
                    </section>
                    <!-- End:: Section-3 -->

                    <!-- Start:: Section-4 -->
                    <section class="section section-bg " id="our-mission">
                        <div class="container text-center ">
                            <p class="fs-12 fw-semibold text-success mb-1"><span class="landing-section-heading">NUESTRA MISIÓN</span></p>
                            <h2 class="fw-semibold mb-2">Nuestra misión se compone de 8 pasos clave.</h2>
                            <div class="row justify-content-center mb-5">
                                <div class="col-xl-7">
                                    <p class="text-muted fs-15 mb-0 fw-normal">Nuestra misión es simplificar el diseño web, permitiéndote centrarte en construir tu marca con el respaldo de tecnologías avanzadas.</p>
                                </div>
                            </div>
                            <div class="row d-flex flex-fill">
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 d-flex flex-fill">
                                    <div class="card custom-card text-start landing-missions d-flex flex-fill">
                                        <div class="card-body">
                                            <div class="align-items-top">
                                                <div class="mb-2">
                                                    <span class="avatar avatar-lg avatar-rounded bg-primary-transparent">
                                                        <i class='bx bx-badge-check fs-25' ></i>
                                                    </span>
                                                </div>
                                                <div>
                                                    <h6 class="fw-semibold mb-1">
                                                        Calidad de Diseño
                                                    </h6>
                                                    <p class="mb-0 text-muted">Nos aseguramos de que cada solución esté diseñada con los más altos estándares de calidad, utilizando las últimas tecnologías.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 d-flex flex-fill">
                                    <div class="card custom-card text-start landing-missions d-flex flex-fill">
                                        <div class="card-body">
                                            <div class="align-items-top">
                                                <div class="mb-2">
                                                    <span class="avatar avatar-lg avatar-rounded bg-primary-transparent">
                                                        <i class='bx bx-file fs-25' ></i>
                                                    </span>
                                                </div>
                                                <div>
                                                    <h6 class="fw-semibold mb-1">
                                                        Documentación
                                                    </h6>
                                                    <p class="mb-0 text-muted">Proporcionamos documentación detallada para facilitar la implementación y el uso de nuestras soluciones tecnológicas.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 d-flex flex-fill">
                                    <div class="card custom-card text-start landing-missions d-flex flex-fill">
                                        <div class="card-body">
                                            <div class="align-items-top">
                                                <div class="mb-2">
                                                    <span class="avatar avatar-lg avatar-rounded  bg-primary-transparent">
                                                        <i class='bx bx-cog fs-25' ></i>
                                                    </span>
                                                </div>
                                                <div>
                                                    <h6 class="fw-semibold mb-1">
                                                        Personalización
                                                    </h6>
                                                    <p class="mb-0 text-muted">Ofrecemos soluciones personalizadas que se adaptan a las necesidades específicas de cada cliente, garantizando un ajuste perfecto.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 d-flex flex-fill">
                                    <div class="card custom-card text-start landing-missions d-flex flex-fill">
                                        <div class="card-body">
                                            <div class="align-items-top">
                                                <div class="mb-2">
                                                    <span class="avatar avatar-lg avatar-rounded bg-primary-transparent">
                                                        <i class='bx bx-cloud-upload fs-25' ></i>
                                                    </span>
                                                </div>
                                                <div>
                                                    <h6 class="fw-semibold mb-1">
                                                        Actualizaciones Regulares
                                                    </h6>
                                                    <p class="mb-0 text-muted">Mantenemos nuestras soluciones actualizadas con las últimas innovaciones tecnológicas para asegurar su eficacia continua.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 d-flex flex-fill">
                                    <div class="card custom-card text-start landing-missions d-flex flex-fill">
                                        <div class="card-body">
                                            <div class="align-items-top">
                                                <div class="mb-2">
                                                    <span class="avatar avatar-lg avatar-rounded bg-primary-transparent">
                                                        <i class='bx bx-support fs-25' ></i>
                                                    </span>
                                                </div>
                                                <div>
                                                    <h6 class="fw-semibold mb-1">
                                                        Soporte 24/7
                                                    </h6>
                                                    <p class="mb-0 text-muted">Ofrecemos soporte continuo para garantizar que nuestros clientes siempre tengan la ayuda que necesitan.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 d-flex flex-fill">
                                    <div class="card custom-card text-start landing-missions d-flex flex-fill">
                                        <div class="card-body">
                                            <div class="align-items-top">
                                                <div class="mb-2">
                                                    <span class="avatar avatar-lg avatar-rounded bg-primary-transparent">
                                                        <i class='bx bx-image fs-25' ></i>
                                                    </span>
                                                </div>
                                                <div>
                                                    <h6 class="fw-semibold mb-1">
                                                        Estilos de Tema Preconstruidos
                                                    </h6>
                                                    <p class="mb-0 text-muted">Ofrecemos una variedad de estilos de tema preconstruidos para facilitar la personalización y el diseño.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 d-flex flex-fill">
                                    <div class="card custom-card text-start landing-missions d-flex flex-fill">
                                        <div class="card-body">
                                            <div class="align-items-top">
                                                <div class="mb-2">
                                                    <span class="avatar avatar-lg avatar-rounded bg-primary-transparent">
                                                        <i class='bx bx-compass fs-25'></i>
                                                    </span>
                                                </div>
                                                <div>
                                                    <h6 class="fw-semibold mb-1">
                                                        Compatibilidad
                                                    </h6>
                                                    <p class="mb-0 text-muted">Nuestras soluciones son compatibles con una amplia gama de plataformas y dispositivos, asegurando su accesibilidad.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 d-flex flex-fill">
                                    <div class="card custom-card text-start landing-missions d-flex flex-fill">
                                        <div class="card-body">
                                            <div class="align-items-top">
                                                <div class="mb-2">
                                                    <span class="avatar avatar-lg avatar-rounded bg-primary-transparent">
                                                        <i class='bx bx-desktop fs-25' ></i>
                                                    </span>
                                                </div>
                                                <div>
                                                    <h6 class="fw-semibold mb-1">
                                                        Totalmente Responsivo
                                                    </h6>
                                                    <p class="mb-0 text-muted">Diseñamos soluciones que se adaptan a cualquier dispositivo, garantizando una experiencia de usuario óptima.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- End:: Section-4 -->

                    <!-- Start:: Section-5 -->
                    <section class="section landing-Features" id="features">
                        <div class="container text-center">
                            <p class="fs-12 fw-semibold text-success mb-1"><span class="landing-section-heading">Características</span></p>
                            <h2 class="fw-semibold mb-2 text-fixed-white ">Tecnologías Utilizadas en MINTTU</h2>
                            <div class="row justify-content-center">
                                <div class="col-xl-7">
                                    <p class="text-fixed-white op-8 fs-15 mb-3 fw-normal">Estas son algunas de las tecnologías que utilizamos para ofrecer soluciones innovadoras y efectivas.</p>
                                </div>
                            </div>
                            <div class="text-start">
                                <div class="justify-content-center">
                                    <div class="">
                                        <div class="feature-logos mt-sm-5 flex-wrap" >
                                            <div class="ms-sm-5 ms-2 text-center">
                                                <img src="{{asset('build/assets/images/media/landing/web/python.png')}}" alt="image" class="featur-icon">
                                                <h5 class="mt-3 text-fixed-white ">Python</h5>
                                            </div>
                                            <div class="ms-sm-5 ms-2 text-center">
                                                <img src="{{asset('https://laravelui.spruko.com/ynex/build/assets/images/media/landing/web/4.png')}}" alt="image" class="featur-icon">
                                                <h5 class="mt-3 text-fixed-white ">HTML</h5>
                                            </div>
                                            <div class="ms-sm-5 ms-2 text-center">
                                                <img src="{{asset('https://laravelui.spruko.com/ynex/build/assets/images/media/landing/web/2.png')}}" alt="image" class="featur-icon">
                                                <h5 class="mt-3 text-fixed-white ">Vite</h5>
                                            </div>
                                            <div class="ms-sm-5 ms-2 text-center">
                                                <img  src="{{asset('https://laravelui.spruko.com/ynex/build/assets/images/media/landing/web/1.png')}}" alt="image" class="featur-icon">
                                                <h5 class="mt-3 text-fixed-white ">Laravel</h5>
                                            </div>
                      
                                            <div class="ms-sm-5 ms-2 text-center">
                                                <img src="{{asset('build/assets/images/media/landing/web/torch.png')}}" alt="image" class="featur-icon">
                                                <h5 class="mt-3 text-fixed-white ">PyTorch</h5>
                                            </div>                        
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-pagination mt-4"></div>
                            </div>
                        </div>
                    </section>
                    <!-- End:: Section-5 -->

                    <!-- Start:: Section-10 -->
                    <section class="section" id="contact">
                        <div class="container text-center">
                            <p class="fs-12 fw-semibold text-success mb-1"><span class="landing-section-heading">CONTÁCTANOS</span></p>
                            <h3 class="fw-semibold mb-2">¿Tienes alguna pregunta? Nos encantaría saber de ti.</h3>
                            <div class="row justify-content-center">
                                <div class="col-xl-9">
                                    <p class="text-muted fs-15 mb-5 fw-normal">Puedes contactarnos en cualquier momento para resolver tus dudas o consultas. No dudes en aclarar tus preguntas antes de probar nuestro producto.</p>
                                </div>
                            </div>
                            <div class="row text-start">
                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                    <div class="card custom-card border shadow-none">
                                        <div class="card-body p-0">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3329.43123456789!2d-70.648269684796!3d-33.448890980768!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9662c5a1f90f1b1b%3A0x2b0b1b1b1b1b1b1b!2sSantiago%2C%20Chile!5e0!3m2!1ses!2scl!4v1670225507254!5m2!1ses!2scl" height="365" style="border:0;width:100%" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                    <div class="card custom-card overflow-hidden section-bg border overflow-hidden shadow-none">
                                        <div class="card-body">
                                            <div class="row gy-3 mt-2 px-3">
                                                <div class="col-xl-6">
                                                    <div class="row gy-3">
                                                        <div class="col-xl-12">
                                                            <label for="contact-address-name" class="form-label">Nombre Completo:</label>
                                                            <input type="text" class="form-control" id="contact-address-name" placeholder="Ingresa tu nombre">
                                                        </div>
                                                        <div class="col-xl-12">
                                                            <label for="contact-address-phone" class="form-label">Teléfono:</label>
                                                            <input type="text" class="form-control" id="contact-address-phone" placeholder="Ingresa tu número de teléfono">
                                                        </div>
                                                        <div class="col-xl-12">
                                                            <label for="contact-address-address" class="form-label">Dirección:</label>
                                                            <textarea class="form-control" id="contact-address-address" rows="1">Santiago, Chile</textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6">
                                                    <label for="contact-address-message" class="form-label">Mensaje:</label>
                                                    <textarea class="form-control" id="contact-address-message" rows="8"></textarea>
                                                </div>
                                                <div class="col-xl-12">
                                                    <div class="d-flex mt-4">
                                                        <div class="">
                                                            <div class="btn-list">
                                                                <a href="https://www.facebook.com" class="btn btn-icon btn-primary-light btn-wave">
                                                                    <i class="ri-facebook-line fw-bold"></i>
                                                                </a>
                                                                <a href="https://www.x.com" class="btn btn-icon btn-primary-light btn-wave">
                                                                    <i class="ri-twitter-line fw-bold"></i>
                                                                </a>
                                                                <a href="https://www.instagram.com" class="btn btn-icon btn-primary-light btn-wave">
                                                                    <i class="ri-instagram-line fw-bold"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="ms-auto">
                                                            <a href="{{route('index')}}" class="btn btn-primary btn-wave">Enviar Mensaje</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- End:: Section-10 -->

                    <!-- Start:: Section-11 -->
                    <section class="section landing-footer text-fixed-white">
                        <div class="container">
                            <div class="row justify-content-between">
                                <div class="col-md-4 col-sm-6 col-12 mb-md-0 mb-3">
                                    <div class="px-4">
                                        <p class="fw-semibold mb-3" style="width: 600px;"><a href="{{url('index')}}"><img src="{{asset('build/assets/images/brand-logos/desktop-white.png')}}" alt=""></a></p>
                                        <p class="mb-2 op-6 fw-normal">
                                            Diseña tu presente pensando en el futuro.
                                        </p>
                                        <p class="mb-0 op-6 fw-normal"><span class="text-muted fs-15"> Copyright © <span id="year"></span> <a
                                            href="minttu.cl" class="text-secondary fw-semibold"><u>MINTTU</u></a>.
                                            <br>
                                            Founded by Menta. All rights reserved.
                                        </span></p>
                                    </div>
                                </div>
                                
                               
                                <div class="col-md-4 col-sm-6 col-12">
                                    <div class="px-4">
                                        <h6 class="fw-semibold text-fixed-white">CONTACTO</h6>
                                        <ul class="list-unstyled fw-normal landing-footer-list">
                                            <li>
                                                <a href="javascript:void(0);" class="text-fixed-white op-6"><i class="ri-home-4-line me-1 align-middle"></i> Santiago, Chile</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="text-fixed-white op-6"><i class="ri-mail-line me-1 align-middle"></i> info@minttu.com</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="text-fixed-white op-6"><i class="ri-phone-line me-1 align-middle"></i> +(569)-882 18431</a>
                                            </li>
                                            <li class="mt-3">
                                                <p class="mb-2 fw-semibold op-8">SIGUENOS EN :</p>
                                                <div class="mb-0">
                                                    <div class="btn-list">
                                                        <a class="btn btn-sm btn-icon btn-primary-light btn-wave waves-effect waves-light" href="https://www.facebook.com">
                                                            <i class="ri-facebook-line fw-bold"></i>
                                                        </a>
                                                        <a class="btn btn-sm btn-icon btn-secondary-light btn-wave waves-effect waves-light" href="https://www.x.com">
                                                            <i class="ri-twitter-line fw-bold"></i>
                                                        </a>
                                                        <a class="btn btn-sm btn-icon btn-warning-light btn-wave waves-effect waves-light" href="https://www.instagram.com">
                                                            <i class="ri-instagram-line fw-bold"></i>
                                                        </a>
                                                        <a class="btn btn-sm btn-icon btn-success-light btn-wave waves-effect waves-light" href="https://www.linkedin.com">
                                                            <i class="ri-github-line fw-bold"></i>
                                                        </a>
                                                        <a class="btn btn-sm btn-icon btn-danger-light btn-wave waves-effect waves-light" href="https://www.youtube.com">
                                                            <i class="ri-youtube-line fw-bold"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- End:: Section-11 -->

@endsection

@section('scripts')

        <!-- SWIPER JS -->
        <script src="{{asset('build/assets/libs/swiper/swiper-bundle.min.js')}}"></script>

        <!-- INTERNAL LANDING JS -->
        @vite('resources/assets/js/landing.js')


@endsection