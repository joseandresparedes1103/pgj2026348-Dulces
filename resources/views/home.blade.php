@extends('adminlte::page')

@section('title', 'Bienvenido a Bob Inmobiliario')

@section('content_header')
    <h1 class="m-0 text-dark">Bienvenido a <span style="color: #007bff;">Bob Inmobiliario</span></h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">Encuentra tu hogar ideal</h5>
                    <p class="card-text">Explora nuestra amplia selección de propiedades en venta y alquiler. Desde departamentos modernos hasta lujosas casas y terrenos bien ubicados, tenemos algo para todos.</p>
                    <a href="{{ route('clienteprincipal') }}" class="btn btn-primary">Ver propiedades</a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">Únete a nuestra comunidad</h5>
                    <p class="card-text">Regístrate para recibir actualizaciones sobre nuevas propiedades, precios, ofertas especiales y eventos exclusivos. ¡Únete a nuestra comunidad de amantes de bienes raíces!</p>
                    <a href="{{ route('register') }}" class="btn btn-primary">Regístrate ahora</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <!-- Sección de testimonios -->
        <div class="col-md-12">
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">Testimonios de nuestros clientes</h5>
                    <div id="testimonialsCarousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <p class="card-text">"Gracias a Bob Inmobiliario, encontré la casa de mis sueños. El proceso fue sencillo y el personal muy amable."</p>
                                <p class="text-muted">- María López</p>
                            </div>
                            <div class="carousel-item">
                                <p class="card-text">"Excelente servicio y gran variedad de propiedades. Altamente recomendado!"</p>
                                <p class="text-muted">- Juan Pérez</p>
                            </div>
                            <div class="carousel-item">
                                <p class="card-text">"La mejor experiencia en la búsqueda de una propiedad. Muy profesionales y atentos a mis necesidades."</p>
                                <p class="text-muted">- Carla Gómez</p>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#testimonialsCarousel" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Anterior</span>
                        </a>
                        <a class="carousel-control-next" href="#testimonialsCarousel" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Siguiente</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <!-- Sección de artículos de blog -->
        <div class="col-md-12">
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">Artículos de nuestro blog</h5>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="card-title">Consejos para comprar tu primera casa</h6>
                                    <p class="card-text">Descubre los mejores consejos y trucos para adquirir tu primera vivienda sin complicaciones.</p>
                                    <a href="#" class="btn btn-link">Leer más</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="card-title">Tendencias del mercado inmobiliario en 2024</h6>
                                    <p class="card-text">Mantente al día con las últimas tendencias y cambios en el mercado inmobiliario.</p>
                                    <a href="#" class="btn btn-link">Leer más</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="card-title">Cómo preparar tu casa para la venta</h6>
                                    <p class="card-text">Aprende a preparar y presentar tu propiedad para atraer a más compradores potenciales.</p>
                                    <a href="#" class="btn btn-link">Leer más</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <!-- Sección de contacto -->
        <div class="col-md-12">
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">Contáctanos</h5>
                    <p class="card-text">¿Tienes alguna pregunta o necesitas más información? No dudes en ponerte en contacto con nosotros. Estamos aquí para ayudarte.</p>
                    
                </div>
            </div>
        </div>
    </div>
@stop

@section('css')
    <style>
        .card-title {
            font-weight: bold;
        }
        .card-text {
            font-size: 1rem;
        }
        .carousel-item p {
            font-size: 1.1rem;
        }
    </style>
@stop

@section('js')
    <script>
        $(document).ready(function(){
            $('.carousel').carousel();
        });
    </script>
@stop
