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
	    <div class="has-text-centered">
	  		<p style="font-family:Bahnschrift; font-weight: bolder; font-size: 20px; padding-top: 2em;">Create An Event</p>
	  		<hr>
	  	</div>
	  	<label style="font-family:Bahnschrift; font-size: 25px;">Create An Event</label>
	  	<p style="font-family:Bahnschrift;">Let's get your students in the system.</p>
	  	<p style="font-family:Bahnschrift;">Please Upload a datasheet with student info.</p>
	  	
	  	   <form method="POST" enctype="multipart/form-data" action="">
		    {{ csrf_field() }}
		    <div class="select">
			  <select>
			    <option>EventName</option>
			    <option>With options</option>
			    <option>With options</option>
			    <option>With options</option>
			    <option>With options</option>
			  </select>
			</div>
		   </form>
		  <br>
	  </div>
	</div>
  	</section>
  </div>
 
</div>
</section>

@endif
@endsection('content')