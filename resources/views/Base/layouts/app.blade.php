<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
</head>
<body>
    <div id="app">
        <header class="header">
            <div class="header__logo">LOGO</div>
            @if (Route::has('login'))
                <div class="header__links--right">
                    @if (Auth::check())
                        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                            {{ csrf_field() }}
                            <button class="btn btn__primary">Logout</button>
                        </form>
                    @else
                        <a href="{{ url('/login') }}" class="btn btn__primary btn__primary--small">Login</a>
                    @endif
                </div>
            @endif
            <div class="clear"></div>
        </header>
        <div class="content">
            @yield('content')
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
</body>
</html>
