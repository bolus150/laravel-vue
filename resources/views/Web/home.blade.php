@extends('Base.layouts.app')

@section('content')
    <div id="app">
        @if(Auth::guest())
            <ul>
                <li><a href="{{ route('login') }}">Login</a></li>
            </ul>
        @else
            <div class="container">
                @include('Web.profile.edit_profile')
            </div>
        @endif
    </div>
@endsection
