@extends('layouts.users')
@section('content')
<!-- @if(Auth::user()->userAuthorized == "0")
<script>window.location = "/stepone";</script>
@else -->
<section class="section has-text-centered"  style="background-image:url('/img/backscreen.png'); height: 800px;">
<div class="container has-text-centered" style="background-color:#191919; height: 500px; border-radius: 5px; margin-top: -3em; padding-right: 3em;">
	<div class="level-left" style="padding-left: 10em; padding-top: 3em;">
		<label style="color: #4b8412; font-family:Bahnschrift; text-transform: uppercase; padding-right:7em; ">{{ Auth::user()->userFirstName }} {{ Auth::user()->userLastName }}</label>
		<a class="button" style=" border-color:#191919;background-color: #191919; height: 60px;  margin-left: 1em;"href="">
		<img src="/img/courses.png" width="30">
		<label style="font-family:Bahnschrift; color:white; padding-left: 1em; padding-right: 2em;">Stock Room</label>
	    </a>
	    <a class="button" style="background-color: #191919; height: 60px;  margin-left: 1em;"href="">
		<img src="/img/redeem.png" width="35">
		<label style="font-family:Bahnschrift; color:white; padding-left: 1em; padding-right: 2em;">Redeem</label>
		</a>
		<a class="button" style="background-color: #191919; height: 60px; margin-left: 1em;"href="">
		<img src="/img/settings.png" width="35">
		<label style="font-family:Bahnschrift; color:white; padding-left: 1em; padding-right: 2em;">Settings</label>
		</a>
		<a class="button" style="background-color: #191919; height: 60px;  margin-left: 1em;"href="">
		<img src="/img/stock.png" width="35">
		<label style="font-family:Bahnschrift; color:white; padding-left: 1em; padding-right: 2em;"></label>
		</a>
	</div>
	<div style="font-family:Bahnschrift; font-size: 25px; opacity: 0.4; padding-top: 1em;">
		Student Home page
	</div>
</div>
</section>
<!-- @endif -->
@endsection('content')