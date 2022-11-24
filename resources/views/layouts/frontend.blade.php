<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
    @yield('title')
    </title>
    <link href="{{ asset('Frontend\css\bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('Frontend\css\custom.css') }}" rel="stylesheet">

    <link href="{{ asset('Frontend\css\owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('Frontend\css\owl.theme.default.min.css') }}" rel="stylesheet">
     <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
     <link id="pagestyle" href="../assets/css/admin/material-dashboard.css?v=3.0.2" rel="stylesheet" />
</head>
<body>

    @include('layouts.inc.frontnavbar')
    <div class="content">
        @yield('content')
    </div>



      <!-- Scripts -->

       <script src="{{ asset('Frontend\js\bootstrap.bundle.min.js') }}" defer></script>
       <script src="{{ asset('public\Frontend\js\jquery-2.2.4.min.js') }}" defer></script>
       <script src="{{ asset('public\Frontend\js\owl.carousel.min.js') }}" defer></script>
       <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
       @if (session('status'))
       <script>
       swal("{{ session('status') }}");
       </script>

       @endif


  @yield('script')



</body>
</html>
