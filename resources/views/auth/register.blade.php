@extends('layouts.auth')

@section('title') Registration @endsection

@section('main')

    <div class="auth-page">

        <div class="picture-section" style="background-image: url({{ asset('img/register_page_bg.jpg') }})"></div>

        <div class="form-section">

            <div class="logo">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('img/btech_logo.png') }}" alt="bTech logo">
                </a>
            </div>

            <form method="POST" action="{{ route('register') }}">

                {{ csrf_field() }}

                <p>Sign up below:</p>

                <div class="form-input{{ $errors->has('name') ? ' has-error' : '' }}">

                    <label for="name" class="control-label">Name</label>

                    <input id="name" type="text" class="form-control" name="name" minlength="3" maxlength="30" placeholder="Name"
                           value="{{ old('name') }}" required autofocus>

                    @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif

                </div>

                <div class="form-input{{ $errors->has('email') ? ' has-error' : '' }}">

                    <label for="email" class="control-label">Email</label>

                    <input id="name" type="email" class="form-control" name="email" minlength="3" maxlength="60" placeholder="Email"
                           value="{{ old('email') }}" required autofocus>

                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif

                </div>

                <div class="form-input{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="password" class="control-label">Password</label>

                    <input id="password" type="password" class="form-control" name="password" minlength="6" placeholder="Password"
                           required>

                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-input">
                    <label for="password-confirm" class=control-label">Confirm Password</label>

                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" minlength="6"
                           placeholder="Confirm Password" required>

                </div>

                <div class="form-input btns">

                    <button type="submit" class="btn blue-small-btn">
                        Sign up
                    </button>

                    <p>Already have an account? <a href="{{ route('login') }}">Sign in</a></p>

                </div>

            </form>

        </div>

    </div>

@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/pages/auth.css') }}">
@endsection