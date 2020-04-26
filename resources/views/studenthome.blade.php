@extends('layouts.users')
@section('content')
<section class="section has-text-centered"  style="background-image:url('/img/backscreen.png'); height: 800px;">
	<div class="container has-text-centered" style="background-color: #262626; height: 500px; border-radius: 5px; margin-top: -3em;">
		
	</div>
<div class="modal is-active">
  <div class="modal-background"></div>
  <div style=" width: 900px;">
  	<section class="container has-text-centered" style="background-color: white;">
	<div class="columns">
	  <div class="column" style="background-image: url('/img/read.png'); background-size: cover; height: 350px;" >
	  </div>
	  <div class="column " style="margin-top: auto; margin-bottom: auto;">
	  	@if (session('status'))
             <div class="container has-text-centered" style=" font-family:Bahnschrift;padding:1em 1em 1em 1em; color: green; border-radius: 5px; height: 40px;">
              {{ session('status') }}
              <br>
              <a href="/student">Go to home page.</a>
            </div>
             <br>
     @endif
	    <div class="has-text-centered">
	  		<p style="font-family:Bahnschrift; font-weight: bolder; font-size: 20px;">Enter you class Code Now!</p>
	  		<hr>
	  		<p style="font-family:Bahnschrift; opacity: 0.6;">Please enter the class code<br> to enter your Stock room.</p>
	  	</div>
	  	<form method="POST" action="/start" >
	  		{{ csrf_field() }}
	  		<input class="inputBox" type="text" name="courses" style="margin-bottom: 1em;">
	  		<input type="hidden" name="userId" value="{{Auth::user()->id}}">
	  		<br>
	  		<button class="btn">Submit</button>
	  	</form>
	  	<a class="linkAttr" style="font-size: 15px;" href="/student">Don't have a class code? Skip.</a>
	  </div>
	</div>
  	</section>
  </div>
  <a href="/student" class="modal-close is-large" aria-label="close"></A>
</div>
</section>

@endsection('content')