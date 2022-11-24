<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="{{ asset('Frontend\css\bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('Frontend\css\custom.css') }}" rel="stylesheet">
     <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
       <link id="pagestyle" href="../assets/css/admin/material-dashboard.css?v=3.0.2" rel="stylesheet" />
</head>
<body>
    <div class='main-panel'>
        @include('layouts.inc.navbar')
    </div>

        @include('layouts.inc.sidebar')

    <div class="content">
        @yield('content')
    </div>

        @include('layouts.inc.footer')

      <!-- Scripts -->
      <script src="{{ asset('js/core/popper.min.js') }}" defer></script>
       <script src="{{ asset('js/plugins/perfect-scrollbar.min.js') }}" defer></script>
       <script src="{{ asset('js/plugins/smooth-scrollbar.min.js') }}" defer></script>
       <script src="{{ asset('js/core/bootstrap.min.js') }}" defer></script>
       <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
       @if (session('status'))
       <script>
       swal("{{ session('status') }}");
       </script>

       @endif

  @yield('script')


</body>
</html>
