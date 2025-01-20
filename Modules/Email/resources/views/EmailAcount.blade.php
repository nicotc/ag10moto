<x-layout>
    <x-slot:styles>
    </x-slot:styles>
    <x-slot:title>
        Email / Acount
    </x-slot:title>
    <x-slot:scripts>
        <script type="module">
            document.addEventListener('livewire:init', () => {
                Livewire.on('edit', (event) => {
                    var editModal = new bootstrap.Modal(document.getElementById('editModal'));
                    editModal.show();
                });
                Livewire.on('create', (event) => {
                    var createModal = new bootstrap.Modal(document.getElementById('createModal'));
                    createModal.show();
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
                            Livewire.dispatch('deleteConfirmed', { id: event.id });
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
                        if (createModal) {
                            createModal.hide();
                        }

                    const editModal = bootstrap.Modal.getInstance(document.getElementById('editModal'));
                        if (editModal) {
                            editModal.hide();
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
                            <span class="text-muted fw-light">Email /</span> Acount
                          </h4>

                        </div>
                    </section>

                    <div class="card">
                        <div class="card-body">
                            <livewire:email::datatable-acount />
                        </div>
                    </div>
                </div>
            </div>




    </div>

    <livewire:email::acount.create />

    <livewire:email::acount.edit />




</x-layout>
