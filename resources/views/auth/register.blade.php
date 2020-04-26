@extends('layouts.master')
@include('layouts.errors')
@section('content')
<section style="background-image:url('/img/backscreen.png'); height:560px;" >
                <div class="container has-text-centered" style="background-color: white; border-radius:5px; width: 1000px;">
                    <div style="margin-left: 17em; padding-top: 2em;">
                            <label style="font-weight: bolder; font-size: 40px; font-family:Bahnschrift;">Register</label>
                            <hr style="width:200px; margin-left:auto; margin-right:auto;">
                    </div>
                    <div style="margin-left: 17em;">
                         <label style="font-family:Bahnschrift; color: green;">Instructor Account</label>
                        <br> 
                    </div>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <input type="hidden" id="userType" name="userType" value="I">
                        <div class="columns is-gapless">
                        <!-- First Column -->
                         <div class="column">
                            <div class="column" style="margin-top: auto; margin-bottom: auto;">
                                <img src="/img/Scene2.png" width="300" >
                            </div>
                        </div>
                         <!-- Second Column -->
                        <div class="column" style="margin-top:2em;margin-bottom: 0px;">
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <input id="userFirstName" type="text" class="inputBox @error('userFirstName') is-invalid @enderror" name="userFirstName" value="{{ old('userFirstName') }}" required autocomplete="userFirstName" placeholder="Your First Name" autofocus>
                                        <br>
                                        @error('userFirstName')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <br>
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <input id="phone" type="phone" class="inputBox @error('userPhone') is-invalid @enderror" name="userPhone" value="{{ old('userPhone') }}" required placeholder="Your Phone Number" autocomplete="userPhone">
                                        <br>
                                        @error('userPhone')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <br>
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <input id="password" type="password" class="inputBox @error('password') is-invalid @enderror" placeholder="Your Password" name="password" required autocomplete="new-password">
                                        <br>
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                        </div>
                           <!-- Third Column -->
                            <div class="column" style="margin-top: 2em;margin-right: 2em;">
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <input id="userLastName" type="text" class="inputBox @error('userLastName') is-invalid @enderror" name="userLastName" value="{{ old('userLastName') }}" required autocomplete="userLastName" placeholder="Your Last Name" autofocus>
                                        <br>
                                        @error('userLastName')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                        <br>
                         <div class="form-group row">

                            <div class="col-md-6">
                                <input id="email" type="email" class="inputBox @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Your Email" autofocus>
                                <br>
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
                                <input id="password-confirm" type="password" class="inputBox" name="password_confirmation" placeholder="Confirm Password" required autocomplete="new-password">
                            </div>
                        </div>
                 </div>
                        </div>
                        <div class="" style="margin-left: 18em; margin-top: -4em; padding-bottom: 2em;">
                            <div class="col-md-6 col-md-offset-4">
                                <br>
                                 <input type="hidden" name="userAccept" value="0">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div> 
                    </form>
</section>
@endsection
