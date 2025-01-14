<x-layout>
    <x-slot:styles>
    </x-slot:styles>
    <x-slot:title>
        ACL / Roles List
    </x-slot:title>
    <x-slot:scripts>
        <script type="module">
            document.addEventListener('livewire:init', () => {
                Livewire.on('editRole', (event) => {
                    var editRoleModal = new bootstrap.Modal(document.getElementById('editRolesModal'));
                    editRoleModal.show();
                });
                Livewire.on('createRole', (event) => {
                    var createRoleModal = new bootstrap.Modal(document.getElementById('createRolesModal'));
                    createRoleModal.show();
                });
                Livewire.on('deleteRole', (event) => {
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
                            Livewire.dispatch('deleteRoleConfirmed', { id: event.id });
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

                    const createRoleModal = bootstrap.Modal.getInstance(document.getElementById('createRoleModal'));
                        if (createRoleModal) {
                            createRoleModal.hide();
                        }

                    const editRoleModal = bootstrap.Modal.getInstance(document.getElementById('editRoleModal'));
                        if (editRoleModal) {
                            editRoleModal.hide();
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
                            <span class="text-muted fw-light">ACL /</span> Roles List
                          </h4>

                        </div>
                    </section>

                    <div class="card">
                        <div class="card-body">
                            <livewire:acl::roles.datatable-roles />
                        </div>
                    </div>
                </div>
            </div>

    </div>


    <livewire:acl::roles.roles-create />
    <livewire:acl::roles.roles-edit />

</x-layout>


