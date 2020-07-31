

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    {{-- <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> --}}

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="auth">

        <div class="wrapper">

            @include('layouts.partials._navbar')
            @include('layouts.partials._sidebar')


            <div class="content-wrapper">

                <main class="">
                    @include('layouts.partials._alert')
                    @yield('content')
                </main>

            </div>

            <!-- Control Sidebar -->
            {{-- <aside class="control-sidebar control-sidebar-dark">
              <div class="p-3">
                <h5>Title</h5>
                <p>Sidebar content</p>
              </div>
            </aside> --}}

            <!-- Main Footer -->
            <footer class="main-footer">
              <!-- To the right -->
              <div class="float-right d-none d-sm-inline">
                Anything you want
              </div>
              <!-- Default to the left -->
              <strong>Copyright &copy; 2020</strong>
            </footer>
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    @stack('scripts')


</body>
</html>



















