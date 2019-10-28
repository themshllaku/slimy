<!DOCTYPE html>
<html lang="en">
    <head>
        <title>{{ config('app.name') }}</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

        <!-- Icons -->
        <link href="{{ asset('assets/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/vendors/simple-line-icons/css/simple-line-icons.css') }}" rel="stylesheet">
        
        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
        <link href="{{ asset('vendors/pace-progress/css/pace.min.css') }}" rel="stylesheet">

        <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
        <style>
            html, body {
                font-family: 'Lato', sans-serif;
            }
        </style>
    </head>

    <body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
        @include('layouts.app.header')

        <div class="app-body">
            @include('layouts.app.sidebar')

            <main class="main">
                @yield('content')
            </main>
        </div>
        
        <footer class="app-footer">
            <div><b>Slimy Accounting</b></div>
        </footer>

        <script src="{{ asset('assets/vendors/jquery/js/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/vendors/popper.js/js/popper.min.js') }}"></script>
        <script src="{{ asset('assets/vendors/bootstrap/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/vendors/pace-progress/js/pace.min.js') }}"></script>
        <script src="{{ asset('assets/vendors/perfect-scrollbar/js/perfect-scrollbar.min.js') }}"></script>
        <script src="{{ asset('assets/vendors/@coreui/coreui/js/coreui.min.js') }}"></script>
        <!-- Plugins and scripts required by this view-->
        <script src="{{ asset('assets/js/main.js') }}"></script>
    </body>
</html>