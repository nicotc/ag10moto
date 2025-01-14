<x-layout>
    <x-slot:styles>
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/css/pages/page-profile.css') }}">
    </x-slot:styles>
    <x-slot:title>
        Account Settings
    </x-slot:title>
    <x-slot:scripts>
        <script type="module">

            document.addEventListener('livewire:init', () => {
                Livewire.on('refresh-user', (data) => {
                    var type = data[0].type;
                    var msg = data[0].message;
                    if (type == 'success') {
                        toastr.success(msg);
                    } else {
                        toastr.error(msg);
                    }
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
                            Livewire.dispatch('deleteUser');
                        }
                    })
                });

            });

        </script>
    </x-slot:scripts>

    <div class="container-xxl flex-grow-1 container-p-y">
      <h4 class="py-3 mb-4 breadcrumb-wrapper">
        <span class="text-muted fw-light">Account Settings /</span> Account
      </h4>


      <livewire:user::profile.account />
    </div>
</x-layout>
