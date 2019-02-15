@extends('layouts.app')

@section('content')
<div class="container login-background">
     <div class="row">
        <div class="col-md-8">
            <div>
                <form method="POST" action="{{ route('login') }}" id="sign-up">
                    @csrf
                    <div class="form-group row">
                        <div class="col-sm">
                            <h1>Login to Twitter</h1>
                        </div>
                    </div>
                    <div class="form-group row">
                        <input type="text" class="col-md-4 col-form-label"
                        style= "width: 100%;
                            background-color: rgb(250, 255, 189) !important;;
                            border: 1px solid #e6ecf0;
                            border-radius: 3px;
                            height: 30px;
                            font-size:18px;
                            vertical-align:9px;"
                            name="lname" placeholder="Phone, email or username">
                        <div class="col-md-6">
                            <input id="email" type="hidden" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                            @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                     <div class="form-group row">
                        <input type="text" class="col-md-4 col-form-label"
                        style= "width: 100%;
                            background-color: rgb(250, 255, 189) !important;;
                            border: 1px solid #e6ecf0;
                            border-radius: 3px;
                            height: 30px;
                            font-size:18px;
                            vertical-align:9px;"
                            name="lname" placeholder="Password">
                         <div class="col-md-6">
                             <input id="password" type="hidden" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        </div>
                     </div>
                    <div class="container">
                        <div class= "row">
                            <div class="col-sm">
                                <a href="/timeline" class="submit login-button">Log in</a>
                            </div>
                            <div class="col-sm">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm">
                                @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                                @endif
                            </div>
                        </div>
                    </div>
                </form>
                <div class="container login-bottom-bg">
                    <div class= "row">
                        <div class="col-sm ">
                            <p>New to Twitter?</p>
                        </div>
                        <div class="col-sm ">
                            <a class="nav-link" href="{{ route('register') }}">Sign up now »</a>
                        </div>
                    </div>
                    <div class= "row">
                        <div class="col-sm ">
                            <p> Already using Twitter via text message?</p>
                        </div>
                        <div class="col-sm ">
                            <a class="nav-link" href="/register">Activate your account »</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     </div>
</div>
@endsection
