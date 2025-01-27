<x-layout>
    <x-slot:styles>
    </x-slot:styles>
    <x-slot:title>
        Pedidos / Editar
    </x-slot:title>
    <x-slot:scripts>
        <script type="module">
            document.addEventListener('livewire:init', () => {



            });
        </script>
    </x-slot:scripts>


    <div class="content">

        <div class="row">
            <div class="col-lg-12">
                <section class="content">
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <h4 class="py-3 mb-1 breadcrumb-wrapper">
                            <span class="text-muted fw-light">Pedidos /</span> Editar
                        </h4>

                    </div>
                </section>

                <div class="row gy-4">
                    <!-- User Sidebar -->
                    <div class="order-1 col-xl-4 col-lg-5 col-md-5 order-md-0">
                        <!-- User Card -->
                        <div class="mb-4 card">
                            <div class="card-body">

                                <h5 class="pb-2 mb-4 border-bottom">Detalle</h5>
                                <div class="info-container">
                                    <ul class="list-unstyled">
                                        <li class="mb-3">
                                            <span class="fw-bold me-2">Nombre:</span>
                                            <span>{{ $pedido->nombre }}</span>
                                        </li>
                                        <li class="mb-3">
                                            <span class="fw-bold me-2">Email:</span>
                                            <span>{{ $pedido->email }}</span>
                                        </li>
                                        <li class="mb-3">
                                            <span class="fw-bold me-2">Telefono:</span>
                                            <span>{{ $pedido->telefono }}</span>
                                        </li>
                                        <li class="mb-3">
                                            <span class="fw-bold me-2">Idioma:</span>
                                            <span>{{ $pedido->lang }}</span>
                                        </li>

                                        <li class="mb-3">
                                            <span class="fw-bold me-2">Problema:</span>
                                            <span>{{ $pedido->problema }}</span>
                                        </li>

                                    </ul>
                                    <div class="pt-3 d-flex justify-content-center">
                                        <a href="javascript:;" class="btn btn-primary me-3" data-bs-target="#editUser"
                                            data-bs-toggle="modal">Edit</a>
                                        <a href="javascript:;" class="btn btn-label-danger suspend-user">Suspended</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- /User Card -->
                        <!-- Plan Card -->
                        <div class="card">
                            <div class="card-body">

                                @php
                                    $imagenes = explode(',', $pedido->imagenes);

                                    if ($imagenes[0] == 'no file provided') {
                                        $imagenes = [];
                                    }

                                @endphp
                                {{-- @dump($imagenes) --}}


                                <div class="col-md">
                                    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
                                        {{-- <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="0" class="active" aria-label="Slide 1" aria-current="true"></button>
                                    <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="1" aria-label="Slide 2" class=""></button>
                                    <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="2" aria-label="Slide 3" class=""></button>
                                  </div> --}}
                                        <div class="carousel-inner">


                                            @forelse ($imagenes as $imagen)
                                                <div
                                                    class="carousel-item   @if ($loop->first) active @endif">
                                                    <img class="d-block w-100" src="{{ trim($imagen) }}" alt="Image">
                                                </div>

                                            @empty
                                                <p> No hay Imagenes</p>
                                            @endforelse
                                        </div>
                                        @if (count($imagenes) > 0)
                                            <a class="carousel-control-prev" href="#carouselExample" role="button"
                                                data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </a>
                                            <a class="carousel-control-next" href="#carouselExample" role="button"
                                                data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </a>
                                        @endif
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- /Plan Card -->
                    </div>
                    <!--/ User Sidebar -->

                    <!-- User Content -->
                    <div class="col-xl-8 col-lg-7 col-md-7 order-0 order-md-1">
                        <!-- User Pills -->
                        <ul class="mb-3 nav nav-pills flex-column flex-md-row">
                            <li class="nav-item">
                                <a class="nav-link" href="/pedidos/edit/{{ $pedido->id }}"><i
                                        class="bx bx-note me-1"></i>Time Line</a>

                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="javascript:void(0);"><i
                                        class="bx bx-time-five me-1"></i>Notas Internas</a>

                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/send/email/{{ $pedido->id }}"><i
                                        class="bx bx-detail me-1"></i>Enviar Email</a>
                            </li>
                            <box-icon name='time-five'></box-icon>
                        </ul>
                        <!--/ User Pills -->

                        <!-- Project table -->

                        <!-- /Project table -->

                        <!-- Activity Timeline -->

                        <div class="mb-4 card">
                            <div class="card-header">
                               {{-- titulo a la izquierda  boton a la derecha  misma linea FLEX--}}
                              <div class="d-flex justify-content-between">
                                <h5 class="card-title ">Notas Internas</h5>
                                <button class="btn btn-primary">Agregar</button>
                                </div>


                            </div>



                            <div class="card-body">
                                <div class="py-4 app-email-view-content ps ps--active-y">
                                    <div class="mx-2 border shadow-none card email-card-prev mx-sm-4 border-warning "
                                        style="display: block;">
                                        <div
                                            class="flex-wrap card-header d-flex justify-content-between align-items-center">
                                            <div class="mb-3 d-flex align-items-center mb-sm-0">
                                                <div class="flex-grow-1 ms-1">
                                                    <span class="badge bg-primary">Kimberly Fallis</span><br>
                                                    <small class="text-muted">
                                                        2 days ago
                                                    </small>


                                                </div>
                                            </div>

                                        </div>
                                        <div class="card-body">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi.
                                            </p>
                                        </div>
                                        <div class="card-footer d-flex justify-content-between">

                                            <div class="d-flex">
                                                <button class="mx-2 btn btn-sm btn-outline-primary"
                                                    wire:click="editActivity(1777)">Edit</button>
                                                <button class="btn btn-sm btn-outline-danger"
                                                    wire:click="deleteActivity(1777)">Delete</button>

                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                        <!-- /Activity Timeline -->

                        <!-- Invoice table -->

                        <!-- /Invoice table -->
                    </div>
                    <!--/ User Content -->
                </div>
            </div>
        </div>

    </div>








</x-layout>
