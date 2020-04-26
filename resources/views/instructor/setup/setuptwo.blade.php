@extends('layouts.users')
@section('content')
@if(Auth::user()->userAccept == "0")
	<script>window.location = "/accept";</script>
@else
<section class="section has-text-centered"  style="background-image:url('/img/backscreen.png'); height: 800px;">
	<div class="container has-text-centered" style="background-color: #262626; height: 500px; border-radius: 5px; margin-top: -3em;">
		
	</div>
<div class="modal is-active">
  <div class="modal-background"></div>
  <div style=" width: 1000px;">
  	<section class="container has-text-centered" style="background-color: white;">
  		 @if (session('status'))
             <div class="container has-text-centered" style=" font-family:Bahnschrift;padding:1em 1em 1em 1em; color: green; border-radius: 5px; height: 40px;">
              {{ session('status') }}
            </div>
            @endif
	    <div class="has-text-centered">
	  		<p style="font-family:Bahnschrift; padding-top: 2em; font-weight: bolder; font-size: 20px;">Enter Student Data!</p>
	  		<hr>
	  	</div>
	  	<label style="font-family:Bahnschrift; font-size: 25px;">Adding Students</label>
	  	<p style="font-family:Bahnschrift;">Let's get your students in the system.</p>
	  	<p style="font-family:Bahnschrift;">Please fill out all the fields.</p>
	  	<div class="example">
		</div>
	  	   <form method="POST" enctype="multipart/form-data" action="/two">
		    {{ csrf_field() }}
		    <div class="row" style="display: flex; padding-left:5em;">
		    	<div class="row" style="margin-right: 1em;">
	                <input id="email" type="email" class="inputBox @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Student Email" autofocus>

	                @error('email')
	                <span class="invalid-feedback" role="alert">
	                    <strong>{{ $message }}</strong>
	                </span>
	                @enderror
                </div>
                <div class="row" style="margin-right: 1em;">
	                <input id="userId" type="text" class="inputBox @error('userId') is-invalid @enderror" name="userId" value="{{ old('userId') }}" required autocomplete="userId" placeholder="Student ID" autofocus>

	                @error('userId')
	                <span class="invalid-feedback" role="alert">
	                    <strong>{{ $message }}</strong>
	                </span>
	                @enderror
            	</div>
            	<div class="row" style="margin-right: 1em;">
	                <input id="userFirstName" type="text" class="inputBox @error('userFirstName') is-invalid @enderror" name="userFirstName" value="{{ old('userFirstName') }}" required autocomplete="userFirstName" placeholder="Student First Name" autofocus>

	                @error('userFirstName')
	                <span class="invalid-feedback" role="alert">
	                    <strong>{{ $message }}</strong>
	                </span>
	                @enderror
            	</div>
            </div>
            <br>
            <div class="row" style="display: flex; padding-left:5em; margin-bottom: 2em; ">
            	<div class="row" style="margin-right: 1em;">
	                <input id="userLastName" type="text" class="inputBox @error('userLastName') is-invalid @enderror" name="userLastName" value="{{ old('userLastName') }}" required autocomplete="userLastName" placeholder="Student Last Name" autofocus>

	                @error('userLastName')
	                <span class="invalid-feedback" role="alert">
	                    <strong>{{ $message }}</strong>
	                </span>
	                @enderror
            	</div>
            	<div class="row" style="margin-right: 1em;">
	                <input id="userPhone" type="text" class="inputBox @error('userPhone') is-invalid @enderror" name="userPhone" value="{{ old('userPhone') }}" required autocomplete="userPhone" placeholder="Student Phone" autofocus>

	                @error('userPhone')
	                <span class="invalid-feedback" role="alert">
	                    <strong>{{ $message }}</strong>
	                </span>
	                @enderror
            	</div>
            	<div class="row" style="margin-right: 1em;">
	                <input id="password" type="text" class="inputBox @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" required autocomplete="password" placeholder="Student Password" autofocus>

	                @error('password')
	                <span class="invalid-feedback" role="alert">
	                    <strong>{{ $message }}</strong>
	                </span>
	                @enderror
            	</div>
            </div>
		    <input type="hidden" name="userType" value="S">
		    <input type="hidden" name="userAccept" value="1">
		    <br>
		    <a class="button" href="/instructor" style="font-family:Bahnschrift;">Back to home</a>
		    <button class="btn" style="height: 40px; font-size: 13px;">Add Student</button>
		   </form>
		  <br>
	  </div>
	</div>
  	</section>
  </div>
  <a href="/instructor" class="modal-close is-large" aria-label="close"></A>
</div>
</section>

@endif
@endsection('content')