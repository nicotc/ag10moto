<x-layout>
    <x-slot:styles>
    </x-slot:styles>
    <x-slot:title>
        ACL / Users List
    </x-slot:title>
    <x-slot:scripts>
        <script type="module">
            document.addEventListener('livewire:init', () => {

                // Open modal
                Livewire.on('editUser', (event) => {
                    var editUserModal = new bootstrap.Modal(document.getElementById('editUserModal'));
                    editUserModal.show();
                });

                Livewire.on('editPassword', (event) => {
                    var editUserModal = new bootstrap.Modal(document.getElementById('editUserPasswordModal'));
                    editUserModal.show();
                });

                Livewire.on('createUser', (event) => {
                    var editUserModal = new bootstrap.Modal(document.getElementById('createUserModal'));
                    editUserModal.show();
                });

                Livewire.on('deleteUser', (event) => {
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

                            Livewire.dispatch('deleteUserConfirmed', { id: event.id });

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
                    // close modal
                    const editUserModalInstance = bootstrap.Modal.getInstance(document.getElementById('editUserModal'));
                        if (editUserModalInstance) {
                            editUserModalInstance.hide();
                        }

                    const editUserPasswordModalInstance = bootstrap.Modal.getInstance(document.getElementById('editUserPasswordModal'));
                        if (editUserPasswordModalInstance) {
                            editUserPasswordModalInstance.hide();
                        }

                    const createUserModalInstance = bootstrap.Modal.getInstance(document.getElementById('createUserModal'));
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
                            <span class="text-muted fw-light">ACL /</span> Users List
                          </h4>

                        </div>
                    </section>

                    <div class="card">
                        <div class="card-body">
                            <livewire:acl::user.datatable-users />
                        </div>
                    </div>
                </div>
            </div>

    </div>

    <livewire:acl::user.user-edit />

    <livewire:acl::user.user-password />


    <livewire:acl::user.user-create />

</x-layout>
