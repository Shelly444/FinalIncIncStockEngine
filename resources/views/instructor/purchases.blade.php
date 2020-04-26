@extends('layouts.master')
@section('content')
@if(Auth::user()->userAccept == "0")
	<script>window.location = "/accept";</script>
@else
<section class="section has-text-centered"  style="background-image:url('/img/backscreen.png'); height: 800px;">
<div class="container has-text-centered" style="background-color:#191919; height: 500px; border-radius: 5px; margin-top: -3em; padding-right: 3em;">
	<div class="has-text-centered" style="padding-top: 3em;">
		<a class="button" style="background-color: #191919; height: 60px;  margin-left: 1em;"href="/instructor">
		<img src="/img/courses.png" width="30">
		<label style="font-family:Bahnschrift; color:white; padding-left: 1em; padding-right: 2em;"> My Stock Rooms</label>
	    </a>
	    <a href="/purchases" class="button" style="border-color:#191919;background-color: #191919; height: 60px;  margin-left: 1em;">
		<img src="/img/redeem.png" width="35">
		<label style="font-family:Bahnschrift; color:white; padding-left: 1em; padding-right: 2em;">Purchases</label>
		</a>
		<a href="/event" class="button" style="background-color: #191919; height: 60px; margin-left: 1em;"href="">
		<img src="/img/event.png" width="35">
		<label style="font-family:Bahnschrift; color:white; padding-left: 1em; padding-right: 2em;">Events</label>
		</a>
		<a class="button" style="background-color: #191919; height: 60px;  margin-left: 1em;"href="rewards">
		<img src="/img/reward.png" width="20">
		<label style="font-family:Bahnschrift; color:white; padding-left: 1em; padding-right: 2em;">Rewards</label>
		</a>
		<a class="button" style="background-color: #191919; height: 60px;  margin-left: 1em;"href="/settings">
		<img src="/img/settings.png" width="35">
		<label style="font-family:Bahnschrift; color:white; padding-left: 1em; padding-right: 2em;">Settings</label>
		</a>

	</div>
	<div class="has-text-centered" style="font-family:Bahnschrift; font-size: 25px; opacity: 0.4; padding-top: 1em;">
		Student Purchase History
	</div>
	<div class="has-text-centered" style="margin-left: 13em; margin-top: 3em;">
      <table class="table" style="background-color: inherit;">
       <tr>
        <th style="color: grey; font-weight: bolder; font-family:Bahnschrift;">Student ID</th>
        <th style="color: grey; font-weight: bolder; font-family:Bahnschrift;">First Name</th>
        <th style="color: grey; font-weight: bolder; font-family:Bahnschrift;">Last Name</th>
        <th style="color: grey; font-weight: bolder; font-family:Bahnschrift;"></th>
        <th style="color: grey; font-weight: bolder; font-family:Bahnschrift;"></th>
       </tr>
       <tr>
        <td style="color: green; font-family:Bahnschrift; "></td>
        <td style="color: white; font-family:Bahnschrift; "></td>
        <td style="color: white; font-family:Bahnschrift; "></td>
        <td style="color: white; font-family:Bahnschrift; "></td>
        <td style="color: white; font-family:Bahnschrift; "></td>
        <td style="color: #40E0D0; opacity: 0.4; font-family:Bahnschrift;">Student</td>
       </tr>
      </table>
     </div>
</div>
</section>
@endif
@endsection('content')
