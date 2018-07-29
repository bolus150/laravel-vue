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
</head>
<body>
    <div id="app">
        <header class="header">
            <div class="header__logo">
                <a href="/" class="header__logo--link">
                    &lt;karol_piekarski/&gt;
                    <div class="header__logo--sub-logo">
                        {web_developer}
                    </div>
                </a>
            </div>
            @if (Route::has('login'))
                <div class="header__links--right mt-10">
                    @if (Auth::check())
                        @if (Auth::user()->isAdmin())
                            <a class="btn btn__primary" href="{{url('/admin')}}">Admin panel</a>
                        @endif
                        <form class="f-right" action="{{ route('logout') }}" method="POST">
                            {{ csrf_field() }}
                            <button class="btn btn__primary">Logout</button>
                        </form>
                        <div class="clear"></div>
                    @else
                        <a href="{{ url('/login') }}" class="btn btn__primary">Login</a>
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
</body>
</html>
