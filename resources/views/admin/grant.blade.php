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
              <li><a style="color: grey;">Activity</a></li>
              <li><a href="/accounts" style="color: grey;">Accounts</a></li>
              <li><a style="color: grey;">Settings</a></li>
            </ul>
        </aside>
        </div>
        <div class="column has-background-white-ter" style="border-radius: 0 5px 5px 0; padding-left:4em; padding-right:4em;">
          <label class="level-left" style="font-family:Bahnschrift; font-size: 30px; padding-left:1em; padding-top:2em; margin-bottom: 1em; opacity: 0.5;">Grant Access</label>
          <p style="font-family:Bahnschrift; ">Granting access to the Instructor will allow them to freely use their account.<br> Their credentials will also disappear from the Accounts request list. </p>
          <br>
          <label style="font-family:Bahnschrift; padding-bottom: 1em;">Grant Access to <p style="font-family:Bahnschrift; color: green;" >{{$select-> userFirstName}}</p></label>
          <form method="POST" action="/grantaccess/{instructor}">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{$select->id}}">
            <input type="hidden" name="userAccept" value="1">
            <button class="btn" style="margin-top: 1em;">Accept Instructor</button> 
          </form>
          <br>
          <a class="button" style="margin-top: 4em; font-family:Bahnschrift;" href="/accounts">Go Back</a>
        </div>
  </div>
</section>
@endsection('content')

