@extends('Base.layouts.app')

@section('content')
<div class="container">
    <div class="panel mt-10">
        <div class="panel__header">
            Logowanie
        </div>
        <div class="panel__body">
            <form class="form" method="POST" action="/login">
                {{ csrf_field() }}

                <div class="form__group">
                    <input id="email" type="email" class="form__input" name="email" value="{{ old('email') }}" required autofocus>
                    <label for="email" class="form__label">E-Mail Address</label>

                    @if ($errors->has('email'))
                        <span class="message message__error">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form__group">
                    <input id="password" type="password" class="form__input" name="password" required>
                    <label for="password" class="form__label">Password</label>

                    @if ($errors->has('password'))
                        <div class="message message__error">
                            <strong>{{ $errors->first('password') }}</strong>
                        </div>
                    @endif
                </div>

                <div class="form__group">
                    <button type="submit" class="btn btn__primary">Login</button>
                </div>
            </form>
        </div>
        <div class="clear"></div>
    </div>
</div>
@endsection
