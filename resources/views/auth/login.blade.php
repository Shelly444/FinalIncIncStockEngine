@extends('layouts.master')

@section('content')
<section style="background-image:url('/img/backscreen.png'); height:560px;" >
                <div class="container has-text-centered" style="background-color: white; border-radius:5px; margin-top: 2em; width: 800px;">
                    <div class="columns">
                      <div class="column" style="margin-top: auto; margin-bottom: auto;">
                        <img src="/img/Scene.png" width="300" >
                      </div>
                      <div class="column" style="margin-top: 2em; margin-bottom: 2em;">
                        <label style="font-weight: bolder; font-size: 40px; font-family:Bahnschrift; ">Login</label>
                        <hr style="width:200px; margin-left:auto; margin-right:auto;">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">

                            <div class="col-md-6">
                                <input id="email" type="email" class="inputBox @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Your Email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <input id="password" type="password" class="inputBox @error('password') is-invalid @enderror" name="password" placeholder="Your Password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember" style="font-family:Bahnschrift;">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="submitBtn">
                                    Login
                                    <img src="/img/login.png" width="15">
                                </button>   
                                 <br>
                                @if (Route::has('password.request'))
                                    <a class="linkAttr" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                    </a>
                                @endif
                                <label>•</label>
                                <a class="linkAttr" style="font-family:Bahnschrift;" href="/register">
                                    Register
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
