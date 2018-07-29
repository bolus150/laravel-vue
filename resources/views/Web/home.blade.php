@extends('Base.layouts.app')

@section('content')
    <div id="app">
        @if(Auth::guest())
            <ul>
                <li><a href="{{ route('login') }}">Login</a></li>
            </ul>
        @else
            @include('Web.profile.edit_profile')
        @endif
    </div>
@endsection
