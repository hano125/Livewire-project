<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default"
    data-assets-path="{{ asset('Back_assets') }}/assets/" data-template="vertical-menu-template-free">
@include('backend.partials.head')

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">

            @include('backend.partials.sideBar')

            @yield('content')

            @include('backend.partials.footer')
            @include('backend.partials.scripts')

</body>

</html>
