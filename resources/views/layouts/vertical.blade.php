<!DOCTYPE html>

<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed layout-compact" dir="ltr"
    data-theme="theme-default" data-assets-path="../../assets/" data-template="vertical-menu-template">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title>Dashboard</title>
    <meta name="description" content="" />
    <link rel="icon" type="image/x-icon" href="../../assets/img/favicon/favicon.ico" />
    @vite(['resources/css/app.scss', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ Vite::asset('resources/core/rtl/core.css') }}" class="template-customizer-core-css">
    <link rel="stylesheet" href="{{ Vite::asset('resources/core/rtl/theme-default.css') }}"
        class="template-customizer-theme-css" />

    @yield('styles')

    <link rel="stylesheet" href="../../assets/css/demo.css" />
    <script src="../../assets/vendor/js/helpers.js"></script>
    <script src="../../assets/vendor/js/template-customizer.js"></script>
    <script src="../../assets/js/config.js"></script>
</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            @include('components.menu.vertical')
            <div class="layout-page">
                <livewire:navar />
                <div class="content-wrapper">
                    @yield('content')
                </div>
                @include('components.footer')
                <div class="content-backdrop fade"></div>
            </div>
        </div>
    </div>
    <div class="layout-overlay layout-menu-toggle"></div>
    <div class="drag-target"></div>
    </div>
    <script src="../../assets/vendor/libs/i18n/i18n.js"></script>
    <script src="../../assets/vendor/js/menu.js"></script>
    <script src="../../assets/js/main.js" type="module"></script>


<script>
    document.addEventListener("DOMContentLoaded", () => {


        localStorage.setItem(
            "templateCustomizer-vertical-menu-template--contentLayout", "wide"
        );

});

</script>

    {{-- livewire script --}}
    @livewireScripts

    @yield('scripts')


</body>

</html>
