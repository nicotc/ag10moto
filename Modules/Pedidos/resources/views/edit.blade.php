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
                                  <a href="javascript:;" class="btn btn-primary me-3" data-bs-target="#editUser" data-bs-toggle="modal">Edit</a>
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
                                   $imagenes =  explode(',', $pedido->imagenes);


                                   if($imagenes[0] == 'no file provided'){
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

                                    @php
                                        if(strstr($imagen, 'https') == false){
                                            $getImage = file_get_contents(trim($imagen));
                                            $base64 = base64_encode($getImage);
                                        }else{
                                            $base64 = "#";
                                        }



                                    @endphp


                                    <div class="carousel-item   @if ($loop->first) active @endif">
                                      <img class="d-block w-100" src="{{ trim($base64) }}" alt="Image">
                                    </div>

                                    @empty
                                        <p> No hay Imagenes</p>
                                    @endforelse
                                  </div>
                                  @if(count($imagenes) > 0)
                                  <a class="carousel-control-prev" href="#carouselExample" role="button" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                  </a>
                                  <a class="carousel-control-next" href="#carouselExample" role="button" data-bs-slide="next">
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
                              <a class="nav-link active" href="javascript:void(0);"><i class="bx bx-time-five me-1"></i>Time Line</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="/notas/{{ $pedido->id }}"><i class="bx bx-note me-1"></i>Notas Internas</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="/send/email/{{ $pedido->id }}"><i class="bx bx-detail me-1"></i>Enviar Email</a>
                            </li>
                            <box-icon name='time-five'></box-icon>
                          </ul>
                          <!--/ User Pills -->

                          <!-- Project table -->

                          <!-- /Project table -->

                          <!-- Activity Timeline -->
                          <div class="mb-4 card">
                            <h5 class="card-header">Estado Timeline</h5>
                            <div class="card-body">
                              <ul class="timeline">
                                <li class="timeline-item timeline-item-transparent">
                                  <span class="timeline-point timeline-point-primary"></span>
                                  <div class="timeline-event">
                                    <div class="mb-1 timeline-header">
                                      <h6 class="mb-0">12 Invoices have been paid</h6>
                                      <small class="text-muted">12 min ago</small>
                                    </div>
                                    <p class="mb-2">Invoices have been paid to the company</p>
                                    <div class="d-flex">
                                      <a href="javascript:void(0)" class="me-3">
                                        <img src="../../assets/img/icons/misc/pdf.png" alt="PDF image" width="20" class="me-2">
                                        <span class="fw-medium text-body">invoices.pdf</span>
                                      </a>
                                    </div>
                                  </div>
                                </li>
                                <li class="timeline-item timeline-item-transparent">
                                  <span class="timeline-point timeline-point-warning"></span>
                                  <div class="timeline-event">
                                    <div class="mb-1 timeline-header">
                                      <h6 class="mb-0">Client Meeting</h6>
                                      <small class="text-muted">45 min ago</small>
                                    </div>
                                    <p class="mb-2">Project meeting with john @10:15am</p>
                                    <div class="flex-wrap d-flex">
                                      <div class="avatar me-3">
                                        <img src="../../assets/img/avatars/3.png" alt="Avatar" class="rounded-circle">
                                      </div>
                                      <div>
                                        <h6 class="mb-0">Lester McCarthy (Client)</h6>
                                        <span>CEO of Pixinvent</span>
                                      </div>
                                    </div>
                                  </div>
                                </li>
                                <li class="timeline-item timeline-item-transparent">
                                  <span class="timeline-point timeline-point-info"></span>
                                  <div class="timeline-event">
                                    <div class="mb-1 timeline-header">
                                      <h6 class="mb-0">Create a new project for client</h6>
                                      <small class="text-muted">2 Day Ago</small>
                                    </div>
                                    <p class="mb-2">5 team members in a project</p>
                                    <div class="d-flex align-items-center avatar-group">
                                      <div class="avatar pull-up" data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" aria-label="Vinnie Mostowy" data-bs-original-title="Vinnie Mostowy">
                                        <img src="../../assets/img/avatars/5.png" alt="Avatar" class="rounded-circle">
                                      </div>
                                      <div class="avatar pull-up" data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" aria-label="Marrie Patty" data-bs-original-title="Marrie Patty">
                                        <img src="../../assets/img/avatars/12.png" alt="Avatar" class="rounded-circle">
                                      </div>
                                      <div class="avatar pull-up" data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" aria-label="Jimmy Jackson" data-bs-original-title="Jimmy Jackson">
                                        <img src="../../assets/img/avatars/9.png" alt="Avatar" class="rounded-circle">
                                      </div>
                                      <div class="avatar pull-up" data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" aria-label="Kristine Gill" data-bs-original-title="Kristine Gill">
                                        <img src="../../assets/img/avatars/6.png" alt="Avatar" class="rounded-circle">
                                      </div>
                                      <div class="avatar pull-up" data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" aria-label="Nelson Wilson" data-bs-original-title="Nelson Wilson">
                                        <img src="../../assets/img/avatars/14.png" alt="Avatar" class="rounded-circle">
                                      </div>
                                    </div>
                                  </div>
                                </li>
                                <li class="timeline-item timeline-item-transparent">
                                  <span class="timeline-point timeline-point-success"></span>
                                  <div class="timeline-event">
                                    <div class="mb-1 timeline-header">
                                      <h6 class="mb-0">Design Review</h6>
                                      <small class="text-muted">5 days Ago</small>
                                    </div>
                                    <p class="mb-0">Weekly review of freshly prepared design for our new app.</p>
                                  </div>
                                </li>
                                <li class="timeline-end-indicator">
                                  <i class="bx bx-check-circle"></i>
                                </li>
                              </ul>
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

