@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1 class="m-0 text-dark">Página principal de <span style="color: #007bff;">Bob Inmobiliario</span></h1>
@stop

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <!-- Publicación 1 -->
            <div class="card mb-3" style="border: 1px solid #ccc; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 text-center">
                            <!-- Imágenes -->
                            <img src="https://lajoya.ec/wp-content/uploads/2015/02/LJ-CONDOMINIO-2-SALA-COMEDOR-1108x960.png" class="img-fluid rounded" alt="Imagen 1">
                            <img src="{{ asset('img/Departamento1.png') }}" class="img-fluid rounded" alt="Imagen 2">
                        </div>
                        <div class="col-md-8">
                            <!-- Contenido de la publicación -->
                            <h5 class="card-title"><strong>Departamento</strong></h5>
                            <p class="card-text"><strong>Tipo de venta:</strong> Alquiler</p>
                            <p class="card-text"><strong>Descripción:</strong> Se alquila un departamento en una ubicación privilegiada cerca del estadio en La Paz, Bolivia. Este departamento está situado en una zona estratégica y de alta demanda, ideal para aquellos que deseen disfrutar de la comodidad y la cercanía a importantes centros deportivos y recreativos.</p>
                            <p class="card-text"><strong>Ubicación:</strong> <a href="https://maps.app.goo.gl/i5KRg8V9Q2HxyaFa6" target="_blank">Ver en Google Maps</a></p>
                            <p class="card-text"><strong>Dimensiones:</strong> 120m²</p>
                            <p class="card-text"><strong>Habitaciones:</strong> 3</p>
                            <p class="card-text"><strong>Baños:</strong> 2</p>
                            <p class="card-text"><strong>Precio:</strong> $500/mes</p>
                            <p class="card-text"><strong>Estado:</strong> Disponible</p>
                        </div>
                    </div>
                    <!-- Comentarios -->
                    <div class="mt-3">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="rating">
                                <!-- Estrellas de valoración -->
                                <span class="fa fa-star" data-rating="1"></span>
                                <span class="fa fa-star" data-rating="2"></span>
                                <span class="fa fa-star" data-rating="3"></span>
                                <span class="fa fa-star" data-rating="4"></span>
                                <span class="fa fa-star" data-rating="5"></span>
                                <input type="hidden" name="rating" class="rating-value" value="0">
                            </div>
                        </div>
                        <div class="mt-3">
                            <h6>Comentarios</h6>
                            <form id="commentForm" action="{{ route('comentarios.store') }}" method="POST">
                                @csrf
                                <textarea name="descripcion_com" class="form-control mb-2" rows="2" placeholder="Escribe un comentario..." required></textarea>
                                <input type="hidden" name="id_usuario" value="{{ auth()->user()->id }}">
                                <input type="hidden" name="puntuacion_com" class="rating-value" value="0">
                                <button type="submit" class="btn btn-primary">Guardar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Publicación 2 -->
            <div class="card mb-3" style="border: 1px solid #ccc; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 text-center">
                            <img src="https://cdn.pixabay.com/photo/2016/11/29/03/53/house-1867187_640.jpg" class="img-fluid rounded" alt="Imagen 1">
                            <img src="{{ asset('img/Casa1.png') }}" class="img-fluid rounded" alt="Imagen 2">
                        </div>
                        <div class="col-md-8">
                            <h5 class="card-title"><strong>Casa</strong></h5>
                            <p class="card-text"><strong>Tipo de venta:</strong> Venta</p>
                            <p class="card-text"><strong>Descripción:</strong> En venta una impresionante casa ubicada en el prestigioso barrio de Cota Cota, en la ciudad de La Paz, Bolivia. Esta propiedad se encuentra en una de las zonas más exclusivas y demandadas de la ciudad, ofreciendo un estilo de vida de lujo y comodidad.</p>
                            <p class="card-text"><strong>Ubicación:</strong> <a href="https://maps.app.goo.gl/2rLeUaq3PfGkiHhw9" target="_blank">Ver la ubicacion en Google Maps</a></p>
                            <p class="card-text"><strong>Dimensiones:</strong> 300m²</p>
                            <p class="card-text"><strong>Habitaciones:</strong> 5</p>
                            <p class="card-text"><strong>Baños:</strong> 3</p>
                            <p class="card-text"><strong>Precio:</strong> $200,000</p>
                            <p class="card-text"><strong>Estado:</strong> Disponible</p>
                        </div>
                    </div>
                    <div class="mt-3">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="rating">
                                <span class="fa fa-star" data-rating="1"></span>
                                <span class="fa fa-star" data-rating="2"></span>
                                <span class="fa fa-star" data-rating="3"></span>
                                <span class="fa fa-star" data-rating="4"></span>
                                <span class="fa fa-star" data-rating="5"></span>
                                <input type="hidden" name="rating" class="rating-value" value="0">
                            </div>
                        </div>
                        <div class="mt-3">
                            <h6>Comentarios</h6>
                            <form action="{{ route('comentarios.store') }}" method="POST">
                                @csrf
                                <textarea name="descripcion_com" class="form-control mb-2" rows="2" placeholder="Escribe un comentario..." required></textarea>
                                <input type="hidden" name="id_usuario" value="{{ auth()->user()->id }}">
                                <input type="hidden" name="puntuacion_com" class="rating-value" value="0">
                                <button type="submit" class="btn btn-primary">Guardar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Publicación 3 -->
            <div class="card mb-3" style="border: 1px solid #ccc; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 text-center">
                            <img src="https://www.bienesonline.com/bolivia/photos/en-venta-por-motivos-de-viaje-bonito-terreno-en-cota-cota-400-metros-precio-negociable--TEV70961698073989-263.jpg" class="img-fluid rounded" alt="Imagen 1">
                            <img src="{{ asset('img/Terreno.png') }}" class="img-fluid rounded" alt="Imagen 2">
                        </div>
                        <div class="col-md-8">
                            <h5 class="card-title"><strong>Terreno</strong></h5>
                            <p class="card-text"><strong>Tipo de venta:</strong> Venta</p>
                            <p class="card-text"><strong>Descripción:</strong> Se ofrece a la venta un terreno estratégicamente ubicado en el prestigioso barrio de Cota Cota, en la ciudad de La Paz, Bolivia. Este terreno se encuentra en una de las zonas más exclusivas y solicitadas de la ciudad.</p>
                            <p class="card-text"><strong>Ubicación:</strong> <a href="https://maps.app.goo.gl/UAmdpNWtVmv4t8ot7" target="_blank">Ver en Google Maps</a></p>
                            <p class="card-text"><strong>Dimensiones:</strong> 400m²</p>
                            <p class="card-text"><strong>Precio:</strong> $100,000</p>
                            <p class="card-text"><strong>Estado:</strong> Disponible</p>
                        </div>
                    </div>
                    <div class="mt-3">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="rating">
                                <span class="fa fa-star" data-rating="1"></span>
                                <span class="fa fa-star" data-rating="2"></span>
                                <span class="fa fa-star" data-rating="3"></span>
                                <span class="fa fa-star" data-rating="4"></span>
                                <span class="fa fa-star" data-rating="5"></span>
                                <input type="hidden" name="rating" class="rating-value" value="0">
                            </div>
                        </div>
                        <div class="mt-3">
                            <h6>Comentarios</h6>
                            <form action="{{ route('comentarios.store') }}" method="POST">
                                @csrf
                                <textarea name="descripcion_com" class="form-control mb-2" rows="2" placeholder="Escribe un comentario..." required></textarea>
                                <input type="hidden" name="id_usuario" value="{{ auth()->user()->id }}">
                                <input type="hidden" name="puntuacion_com" class="rating-value" value="0">
                                <button type="submit" class="btn btn-primary">Guardar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Publicación 4 -->
            <div class="card mb-3" style="border: 1px solid #ccc; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 text-center">
                            <img src="https://planosdecasaspequenas.com/wp-content/uploads/2023/12/casa-de-campo-fachada.jpg" class="img-fluid rounded" alt="Imagen 1">
                            
                        </div>
                        <div class="col-md-8">
                            <h5 class="card-title"><strong>Casa de Campo</strong></h5>
                            <p class="card-text"><strong>Tipo de venta:</strong> Venta</p>
                            <p class="card-text"><strong>Descripción:</strong> Hermosa casa de campo a la venta ubicada en las afueras de La Paz, Bolivia. Rodeada de naturaleza, esta propiedad ofrece tranquilidad y comodidad en un entorno rural.</p>
                            <p class="card-text"><strong>Ubicación:</strong> <a href="https://www.google.com/maps" target="_blank">Ver en Google Maps</a></p>
                            <p class="card-text"><strong>Dimensiones:</strong> 500m²</p>
                            <p class="card-text"><strong>Habitaciones:</strong> 4</p>
                            <p class="card-text"><strong>Baños:</strong> 2</p>
                            <p class="card-text"><strong>Precio:</strong> $150,000</p>
                            <p class="card-text"><strong>Estado:</strong> Disponible</p>
                        </div>
                    </div>
                    <div class="mt-3">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="rating">
                                <span class="fa fa-star" data-rating="1"></span>
                                <span class="fa fa-star" data-rating="2"></span>
                                <span class="fa fa-star" data-rating="3"></span>
                                <span class="fa fa-star" data-rating="4"></span>
                                <span class="fa fa-star" data-rating="5"></span>
                                <input type="hidden" name="rating" class="rating-value" value="0">
                            </div>
                        </div>
                        <div class="mt-3">
                            <h6>Comentarios</h6>
                            <form action="{{ route('comentarios.store') }}" method="POST">
                                @csrf
                                <textarea name="descripcion_com" class="form-control mb-2" rows="2" placeholder="Escribe un comentario..." required></textarea>
                                <input type="hidden" name="id_usuario" value="{{ auth()->user()->id }}">
                                <input type="hidden" name="puntuacion_com" class="rating-value" value="0">
                                <button type="submit" class="btn btn-primary">Guardar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Publicación 5 -->
            <div class="card mb-3" style="border: 1px solid #ccc; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 text-center">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS7z69glpbPboNO3BpofZrHhURpdaMadTdunw&s" class="img-fluid rounded" alt="Imagen 1">

                        </div>
                        <div class="col-md-8">
                            <h5 class="card-title"><strong>Cabaña</strong></h5>
                            <p class="card-text"><strong>Tipo de venta:</strong> Alquiler</p>
                            <p class="card-text"><strong>Descripción:</strong> Alquiler de una acogedora cabaña ubicada en la zona de los Yungas, La Paz, Bolivia. Ideal para retiros de fin de semana o vacaciones familiares, esta cabaña ofrece un ambiente tranquilo y natural.</p>
                            <p class="card-text"><strong>Ubicación:</strong> <a href="https://www.google.com/maps" target="_blank">Ver en Google Maps</a></p>
                            <p class="card-text"><strong>Dimensiones:</strong> 80m²</p>
                            <p class="card-text"><strong>Habitaciones:</strong> 2</p>
                            <p class="card-text"><strong>Baños:</strong> 1</p>
                            <p class="card-text"><strong>Precio:</strong> $300/mes</p>
                            <p class="card-text"><strong>Estado:</strong> Disponible</p>
                        </div>
                    </div>
                    <div class="mt-3">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="rating">
                                <span class="fa fa-star" data-rating="1"></span>
                                <span class="fa fa-star" data-rating="2"></span>
                                <span class="fa fa-star" data-rating="3"></span>
                                <span class="fa fa-star" data-rating="4"></span>
                                <span class="fa fa-star" data-rating="5"></span>
                                <input type="hidden" name="rating" class="rating-value" value="0">
                            </div>
                        </div>
                        <div class="mt-3">
                            <h6>Comentarios</h6>
                            <form action="{{ route('comentarios.store') }}" method="POST">
                                @csrf
                                <textarea name="descripcion_com" class="form-control mb-2" rows="2" placeholder="Escribe un comentario..." required></textarea>
                                <input type="hidden" name="id_usuario" value="{{ auth()->user()->id }}">
                                <input type="hidden" name="puntuacion_com" class="rating-value" value="0">
                                <button type="submit" class="btn btn-primary">Guardar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@stop

@section('css')
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Roboto', sans-serif;
            color: #333;
        }

        .card-title {
            font-size: 1.5rem;
            margin-bottom: 10px;
            color: #007bff;
        }

        .card-text {
            line-height: 1.4;
            color: #555;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }

        .rating {
            display: inline-block;
        }

        .rating span {
            font-size: 1.5rem;
            cursor: pointer;
            color: #ddd;
        }

        .rating span.checked {
            color: #f0ad4e;
        }

        .rating-value {
            display: none;
        }
    </style>
@stop

@section('js')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var stars = document.querySelectorAll('.rating span');
            stars.forEach(function(star) {
                star.addEventListener('click', function() {
                    var rating = this.getAttribute('data-rating');
                    var siblings = this.parentNode.querySelectorAll('span');
                    siblings.forEach(function(sib) {
                        sib.classList.remove('checked');
                    });
                    for (var i = 0; i < rating; i++) {
                        siblings[i].classList.add('checked');
                    }
                    document.querySelectorAll('input[name="puntuacion_com"]').forEach(input => {
                        input.value = rating;
                    });
                });
            });

            // Prevent form submission on star rating click
            document.querySelectorAll('.rating span').forEach(function(star) {
                star.addEventListener('click', function(event) {
                    event.preventDefault();
                });
            });
        });
    </script>
@stop
