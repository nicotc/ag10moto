<x-layout>
    <x-slot:styles>
    </x-slot:styles>
    <x-slot:title>
        Pedidos / Editar
    </x-slot:title>
    <x-slot:scripts>
    <script type="module">
        document.addEventListener('livewire:init', () => {
            Livewire.on('openEditNoteModal', (event) => {
                var editNoteModal = new bootstrap.Modal(document.getElementById('editNoteModal'));
                editNoteModal.show();
            });
            Livewire.on('openCreateNoteModal', (event) => {
                var createNoteModal = new bootstrap.Modal(document.getElementById('createNoteModal'));
                createNoteModal.show();
            });
            Livewire.on('deleteNote', (event) => {


                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {

                        Livewire.dispatch('deleteNoteConfirmed',  [event] );

                    }
                })
            });
            Livewire.on('notify', (data) => {
                var type = data[0].type;
                var msg = data[0].message;
                if (type == 'success') {
                    toastr.success(msg);
                } else {
                    toastr.error(msg);
                }

                const createNoteModal = bootstrap.Modal.getInstance(document.getElementById('createNoteModal'));
                    if (createNoteModal) {
                        createNoteModal.hide();
                    }

                const editNoteModal = bootstrap.Modal.getInstance(document.getElementById('editNoteModal'));
                    if (editNoteModal) {
                        editNoteModal.hide();
                    }

                });
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


                            <div class="col-md-12">
                                <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">

                                  <div class="carousel-inner">


                                    @forelse ($img as $imagen)
                                    <div class="carousel-item   @if ($loop->first) active @endif">
                                      <img class="d-block w-100" style="width: 100% !important" src="{{ trim($imagen) }}" alt="Image">
                                    </div>

                                    @empty

                                    @endforelse
                                  </div>
                                  @if(count($img) > 0)
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

                 <livewire:notes::note-list :pedido="$pedido->id" />
                 {{-- <livewire:pedidos::change-status /> --}}
                        <!-- /Activity Timeline -->

                        <!-- Invoice table -->

                        <!-- /Invoice table -->
                    </div>
                    <!--/ User Content -->
                </div>
            </div>
        </div>

    </div>

    <livewire:notes::create-note :pedido="$pedido->id" />
    <livewire:notes::edit-note />






</x-layout>
