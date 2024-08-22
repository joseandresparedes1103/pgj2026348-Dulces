@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-primary text-white">Información</div>

                    <div class="card-body">
                        <div x-data="{ isOpen: false }" class="mb-4">
                            <h3 class="cursor-pointer text-3xl" @click="isOpen = !isOpen" x-bind:class="{ 'text-blue-500': isOpen }">Política de Privacidad <i class="fas fa-chevron-down ml-2" x-bind:class="{ 'fa-chevron-up': isOpen, 'fa-chevron-down': !isOpen }"></i></h3>
                            <div x-show="isOpen" class="mt-2 text-lg">
                                <p class="text-gray-700">
                                    En Bob Inmobiliario, valoramos la privacidad de nuestros clientes y visitantes. Toda la información personal proporcionada será tratada con la máxima confidencialidad y solo se utilizará con el propósito de brindar servicios inmobiliarios de alta calidad. No compartiremos su información con terceros sin su consentimiento previo. Nos comprometemos a cumplir con todas las leyes y regulaciones de protección de datos.
                                </p>
                            </div>
                        </div>

                        <div x-data="{ isOpen: false }" class="mb-4">
                            <h3 class="cursor-pointer text-3xl" @click="isOpen = !isOpen" x-bind:class="{ 'text-blue-500': isOpen }">Reglas de la Empresa <i class="fas fa-chevron-down ml-2" x-bind:class="{ 'fa-chevron-up': isOpen, 'fa-chevron-down': !isOpen }"></i></h3>
                            <div x-show="isOpen" class="mt-2 text-lg">
                                <p class="text-gray-700">
                                    En Bob Inmobiliario, nos esforzamos por mantener altos estándares de ética y profesionalismo en todas nuestras operaciones. Esperamos que todos nuestros empleados y clientes respeten estas reglas mientras interactúan con nosotros. Esto incluye el respeto mutuo, la transparencia en todas las transacciones y el cumplimiento de todas las leyes y regulaciones aplicables. Nos comprometemos a tratar a todos nuestros clientes con integridad y a brindar un servicio excepcional en todo momento.
                                </p>
                            </div>
                        </div>

                        <div x-data="{ isOpen: false }" class="mb-4">
                            <h3 class="cursor-pointer text-3xl" @click="isOpen = !isOpen" x-bind:class="{ 'text-blue-500': isOpen }">Información Adicional <i class="fas fa-chevron-down ml-2" x-bind:class="{ 'fa-chevron-up': isOpen, 'fa-chevron-down': !isOpen }"></i></h3>
                            <div x-show="isOpen" class="mt-2 text-lg">
                                <p class="text-gray-700">
                                    Bob Inmobiliario se compromete a ofrecer las mejores soluciones de bienes raíces a nuestros clientes. Estamos dedicados a proporcionar un servicio personalizado y a ayudar a nuestros clientes a encontrar las propiedades que mejor se adapten a sus necesidades y preferencias. Si tiene alguna pregunta o inquietud, no dude en ponerse en contacto con nuestro equipo. Además, estamos constantemente actualizando nuestro catálogo de propiedades para ofrecer las últimas opciones disponibles en el mercado.
                                </p>
                                <p class="text-gray-700 mt-4">
                                    Además, ofrecemos servicios de asesoramiento personalizado para ayudarlo a navegar por el complejo proceso de compra, venta o alquiler de propiedades. Nuestro equipo de expertos en bienes raíces está aquí para guiarlo en cada paso del camino y asegurarse de que tome decisiones informadas y acertadas.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
