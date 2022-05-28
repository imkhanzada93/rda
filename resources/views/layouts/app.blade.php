<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ env('APP_NAME') }} | {{ $title }}</title>
        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
        @yield('styles')
        <!-- Theme style -->
        <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">

        <style>
            .btn-rounded{
                border-radius: 50px;
            }
            .grid-striped .row:nth-of-type(odd) {
                background-color: rgba(0,0,0,.05);
            }
        </style>

 

    </head>
    <body class="sidebar-mini text-sm">
        <!-- Site wrapper -->
        <div class="wrapper">
            @if(Auth::user())
                @include('layouts/header')
                @include('layouts/menu')
            @endif
    
            @yield('content')
            
            @if(Auth::user())
                @include('layouts/footer')
            @endif

        </div>
        <!-- ./wrapper -->
        <!-- jQuery -->
        <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
        <!-- Bootstrap 4 -->
        <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <!-- AdminLTE App -->
        <script src="{{ asset('dist/js/adminlte.min.js') }}"></script>
        <!-- AdminLTE for demo purposes -->
        @yield('scripts')

        <!-- Custom Script -->
        <script>
            function logout(link){
                event.preventDefault();
                var logoutForm = '<form method="POST" action="' + link + '"> {{ csrf_field() }}</form>';
                $(logoutForm).appendTo('body').submit().remove();
            }
        </script>
    </body>
</html>
        
        
        