@extends('layouts.design')
@section('content')
<section class="section has-text-centered"  style="background-image:url('/img/adminscreen.png'); height: 800px;">
	<div class="container has-text-centered" style="background-color: #2F4F4F; border-radius:5px; margin-top:-3em; width: 1000px; padding-left: 1em; width: 2000px;">
			<div class="columns" style="margin-top: 2em; height: 500px;" >
			  <div class="column is-one-quarter" style="padding-top: 1em;">
			    <aside class="menu">
			    	<label style="font-family:Bahnschrift; color: #32CD32; font-size: 30px;">ADMIN</label>
					<p class="menu-label">
		   				 General
		  			</p>
		  			<ul class="menu-list" style="font-family:Bahnschrift;">
		    			<li><a style="color: grey;">Acivity</a></li>
		    			<li><a href="/accounts" style="color: grey;">Accounts</a></li>
		    			<li><a style="color: grey;">Settings</a></li>
		  			</ul>
				</aside>
			  </div>
			  <div class="column has-background-white-ter" style="border-radius: 0 5px 5px 0;">
			  
			  </div>
	</div>
</section>
@endsection('content')