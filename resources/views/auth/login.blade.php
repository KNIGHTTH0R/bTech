@extends('layouts.auth')

@section('title') Login @endsection

@section('main')

    <div class="auth-page login">

        <div class="picture-section" style="background-image: url({{ asset('img/register_page_bg.jpg') }})"></div>

        <div class="form-section">

            <div class="logo">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('img/btech_logo.png') }}" alt="bTech logo">
                </a>
            </div>

            <form method="POST" action="{{ route('login') }}">

                {{ csrf_field() }}

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

                <div class="form-input btns">

                    <button type="submit" class="btn blue-small-btn">
                        Login
                    </button>

                    <div class="checkbox">
                        <input type="checkbox" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label for="remember">Remember Me</label>
                    </div>


                </div>

                <div class="form-input links">

                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        Forgot Your Password?
                    </a>

                </div>


            </form>

        </div>

    </div>

@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/pages/auth.css') }}">
@endsection