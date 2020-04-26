@extends('layouts.master')
@include('layouts.errors')
@section('content')
@if(Auth::user()->userAccept == "0")
	<script>window.location = "/accept";</script>
@else
<section style="background-image:url('/img/backscreen.png'); height:560px;" >
	<div class="container has-text-centered" style="background-color: white; width:600px; border-radius:5px; padding: 5em; ">
	<img src="/img/success.png" width="150" style="margin-left:auto; margin-right:auto;">
	<br>
	<label style="font-family:Bahnschrift; font-size:25px;">Congrats! Your Account has been made succesfully!</label>
	<br>
	<p>Click to proceed.</p>
	<br>
	@if(Auth::user()->userType == "A")
	<a class="btn" href="/admin">HOME➠</a>
	@endif
	@if(Auth::user()->userType == "S")
	<a class="btn" href="/start">HOME➠</a>
	@endif
	@if(Auth::user()->userType == "I")
	<a class="btn" href="/instructor">HOME➠</a>
	@endif
@endif
</div>
</section>
@endsection