<x-layout>
    <x-slot:styles>
    </x-slot:styles>
    <x-slot:title>
        Email / Template
    </x-slot:title>
    <x-slot:scripts>
        <script type="module">
            document.addEventListener('livewire:init', () => {
                Livewire.on('editModal', (event) => {
                    var editPermissionModal = new bootstrap.Modal(document.getElementById('editPermissionModal'));
                    editPermissionModal.show();
                });
                Livewire.on('createModal', (event) => {
                    var createPermissionModal = new bootstrap.Modal(document.getElementById('createPermissionModal'));
                    createPermissionModal.show();
                });
                Livewire.on('deleteModal', (event) => {
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
                            Livewire.dispatch('deletePermissionConfirmed', { id: event.id });
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

                    const createModal = bootstrap.Modal.getInstance(document.getElementById('createModal'));
                        if (createPermissionModal) {
                            createPermissionModal.hide();
                        }

                    const editModal = bootstrap.Modal.getInstance(document.getElementById('editModal'));
                        if (editPermissionModal) {
                            editPermissionModal.hide();
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
                            <span class="text-muted fw-light">Email /</span> Template
                          </h4>

                        </div>
                    </section>

                    <div class="card">
                        <div class="card-body">
                            <livewire:email::datatable-template />
                        </div>
                    </div>
                </div>
            </div>




    </div>

    <livewire:acl::permission.permission-create />

    <livewire:acl::permission.permission-edit />




</x-layout>
