@extends('layouts.master')
@section('content')
<section style="background-image:url('/img/backscreen.png'); height:560px;" >
<div class="has-text-centered" style="margin-top: 7em; margin-bottom: auto;">
    <label style="color: black; font-family:Bahnschrift; font-size: 60px; font-weight: bolder;">Loading...</label>
</div>
</section>
@if(Auth::user()->userType == "A")
    <script>window.location = "/admin";</script>
    @elseif(Auth::user()->userType == "S")
    <script>window.location = "/start";</script>
    @elseif(Auth::user()->userType == "I")
    <script>window.location = "/instructor";</script>
    @endif 
@endsection
