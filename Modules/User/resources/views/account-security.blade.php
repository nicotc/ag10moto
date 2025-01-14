<x-layout>
    <x-slot:styles>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/css/pages/page-profile.css') }}">
    </x-slot:styles>
    <x-slot:title>
        Account Security
    </x-slot:title>
    <x-slot:scripts>
        <script type="module">

            document.addEventListener('livewire:init', () => {
            Livewire.on('notify', (data) => {
                var type = data[0].type;
                var msg = data[0].message;
                if (type == 'success') {
                    toastr.success(msg);
                } else {
                    toastr.error(msg);
                }
            });
        });
    </script>
    </x-slot:scripts>



    <div class="container-xxl flex-grow-1 container-p-y">
      <h4 class="py-3 mb-4 breadcrumb-wrapper">
        <span class="text-muted fw-light">Account Settings /</span>  Security
      </h4>
      <livewire:user::profile.security />
    </div>
</x-layout>
