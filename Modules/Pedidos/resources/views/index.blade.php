<x-layout>
    <x-slot:styles>
    </x-slot:styles>
    <x-slot:title>
        Pedidos / Listado
    </x-slot:title>
    <x-slot:scripts>
        <script type="module">
            document.addEventListener('livewire:init', () => {

                Livewire.on('create', (event) => {
                    var editUserModal = new bootstrap.Modal(document.getElementById('createModal'));
                    editUserModal.show();
                });

                Livewire.on('delete', (event) => {
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
                            // enviar evento para confirmar la eliminación id
                            // console.log('deleteUserConfirmed', event);

                            Livewire.dispatch('deleteConfirmed', { id: event.id });

                        }
                    });
                });


                // notify and close modal

                Livewire.on('notify', (data) => {
                    var type = data[0].type;
                    var msg = data[0].message;
                    if (type == 'success') {
                        toastr.success(msg);
                    } else {
                        toastr.error(msg);
                    }



                    const createUserModalInstance = bootstrap.Modal.getInstance(document.getElementById('createModal'));
                        if (createUserModalInstance) {
                            createUserModalInstance.hide();
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
                            <span class="text-muted fw-light">Pedidos /</span>Listado
                          </h4>
                   
                        </div>
                    </section>

                    <div class="card">
                        <div class="card-body">

<livewire:pedidos::datatable-pedidos />
                        </div>
                    </div>
                </div>
            </div>

    </div>


    <livewire:pedidos::crear-pedidos />

</x-layout>

