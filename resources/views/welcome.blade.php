@extends('layouts.master')
@section('content')
				@if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
				<section class="section has-text-centered"  style="background-image:url('/img/backscreen.png'); height: 800px;">
				<p class="title" style="font-weight: bolder; color:white; margin-bottom: 0px; font-family: Bahnschrift; margin-top:1em;">Welcome To The IncInc Stock Engine</p>
				<p class="is-size-5" style="color:#DCDCDC; font-family: Bahnschrift;">Get your class in the loop!</p>
				<br>
				<br>
				<a href="/register" class="btn">Instructor Registration</a>
				</section>
@endsection('content')