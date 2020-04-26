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
  <div style=" width: 1200px;">
  	<section class="container has-text-centered" style="background-color: white;">
	<div class="columns">
	  <div class="column" style="background-image: url('/img/setup.png'); background-size: cover; height: 600px;" >
	  </div>
	  <div class="column " style="margin-top: auto; margin-bottom: auto;">
	 @if (session('status'))
             <div class="container has-text-centered" style=" font-family:Bahnschrift;padding:1em 1em 1em 1em; color: green; border-radius: 5px; height: 40px;">
              {{ session('status') }}
              <br>
              <a href="/class">Add a class</a>
            </div>
             <br>
     @endif
	    <div class="has-text-centered">
	  		<p style="font-family:Bahnschrift; font-weight: bolder; font-size: 20px;">Create your course</p>
	  		<hr>
	  	</div>
	  	<label style="font-family:Bahnschrift; font-size: 25px;">Step One</label>
	  	<p style="font-family:Bahnschrift;">Setup your course</p>
	  	   <form method="POST" action="/begin"  enctype="multipart/form-data">
		    {{ csrf_field() }}
		    <div>
		    <p>Course Name</p>
		    <input class="inputBox" style="margin-bottom: 20px;" type="text" name="name" autofocus required>
		    <br>
		    <p>Start Date</p>
		    <input class="inputBox" style="margin-bottom: 20px;" type="date" name="startdate" required>
		    <br>
		    <p>End Date</p>
		    <input class="inputBox" style="margin-bottom: 20px;" type="date" name="enddate" required>
		    <input type="hidden" name="accountId" value="{{Auth::user()->id}}">
		    </div>
		    <button type="submit" class="btn">Add</button>
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