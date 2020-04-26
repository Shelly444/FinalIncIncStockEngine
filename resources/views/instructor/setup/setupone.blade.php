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
	<div class="columns">
	  <div class="column" style="background-image: url('/img/excel.png'); background-size: cover; height: 480px;" >
	  </div>
	  <div class="column " style="margin-top: auto; margin-bottom: auto;">
	  	 @if (session('status'))
             <div class="container has-text-centered" style=" font-family:Bahnschrift;padding:1em 1em 1em 1em; color: green; border-radius: 5px; height: 40px;">
              {{ session('status') }}
            </div>
            @endif
	    <div class="has-text-centered">
	  		<p style="font-family:Bahnschrift; font-weight: bolder; font-size: 20px;">Import a data sheet!</p>
	  		<hr>
	  	</div>
	  	<label style="font-family:Bahnschrift; font-size: 25px;">Step Three</label>
	  	<p style="font-family:Bahnschrift;">Let's get your students in the system.</p>
	  	<p style="font-family:Bahnschrift;">Please Upload a datasheet with student info.</p>
	  	<div class="example">
		  <span>Example Format</span>
		  <br>
		  <div class="examplePicture">
		  <img src="/img/example.png">
		  </div>
		</div>
	  	   <form method="POST" enctype="multipart/form-data" action="/one">
		    {{ csrf_field() }}
		    <div class="form-group" style="padding-left:5em; padding-right: 5em;">
		     <table class="table has-text-centered">
		      <tr>
		       <tr>
		       	<td>
		       		<input type="hidden" name="userType" value="S">
		       		<p class="has-text-centered" style="font-family:Bahnschrift;">Create Students passwords.</p>
		       		<p class="has-text-centered" style="opacity:0.5;font-family:Bahnschrift;">It will be used when they first login.</p>
		       		<input style="margin-left: 13px;" class="inputBox" type="password" name="password" required>
		       		<input type="hidden" name="userAccept" value="1">
		        <input style="padding-left:4em;" type="file" name="excelFile" />
		        </td>
		       </tr>
		       <tr>
		       	<td class="has-text-centered">
		        <input type="submit" name="upload" class="btn btn-primary" value="Upload">
		    	</td>
		       </tr>
		      </tr>
		     </table>
		    </div>
		    <a class="linkAttr" style="font-family:Bahnschrift;" href="/two">
             Don't have an excel sheet? Enter manually!
            </a>
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