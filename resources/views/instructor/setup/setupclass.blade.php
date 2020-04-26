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
	  <div class="column" style="background-image: url('/img/setup2.png'); background-size: cover; height: 600px;" >
	  </div>
	  <div class="column " style="margin-top: auto; margin-bottom: auto;">
      @if (session('status'))
             <div class="container has-text-centered" style=" font-family:Bahnschrift;padding:1em 1em 1em 1em; color: green; border-radius: 5px; height: 40px;">
              {{ session('status') }}
              <br>
              <a href="/one">Add students</a>
            </div>
             <br>
     @endif
	    <div class="has-text-centered">
	  		<p style="font-family:Bahnschrift; font-weight: bolder; font-size: 20px;">Create your classes</p>
	  		<hr>
	  	</div>
	  	<label style="font-family:Bahnschrift; font-size: 25px;">Step 2</label>
	  	<p style="font-family:Bahnschrift;">Setup your classes</p>

	  	    <form method="POST" enctype="multipart/form-data" action="/class">
		    {{ csrf_field() }}
		    <div>
		    <p>CLass Start(Ex. 12:00 P.M)</p>
		    <input class="inputBox" style="margin-bottom: 20px;" type="time" name="classStart" autofocus required>
		    <br>
		    <p>CLass End(Ex. 2:00 P.M)</p>
		    <input class="inputBox" style="margin-bottom: 20px;" type="time" name="classEnd" autofocus required>
		    <br>
		    <div class="select">
			  <select name="courses" style="width: 270px;" required>
			    <option style="font-family:Bahnschrift;" disabled selected>Courses</option>
			    @foreach($courses as $course)
			    <option style="font-family:Bahnschrift; color:green; text-transform: uppercase;" value="{{$course->courseName}}">{{$course->courseName}}</option>
			    @endforeach
			  </select>
			</div>
			<br>
		    <p>Week Date</p>
		    <div class="select">
		    <select name="day" style="width: 270px;"required>
			    <option style="font-family:Bahnschrift;" value="" disabled selected >Day</option>
			    <option style="font-family:Bahnschrift;" value="Monday">Monday</option>
			    <option style="font-family:Bahnschrift;" value="Tuesday">Tuesday</option>
			    <option style="font-family:Bahnschrift;" value="Wednesday">Wednesday</option>
			    <option style="font-family:Bahnschrift;" value="Thursday">Thursday</option>
			    <option style="font-family:Bahnschrift;" value="Friday">Friday</option>
			    <option style="font-family:Bahnschrift;" value="Saturday">Saturday</option>
			  </select>
			</div>
		    </div>
		    <br>
		    <button type="submit" class="btn">Add Class</button>
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