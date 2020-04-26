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
          <br>
            @if (session('status'))
             <div class="container has-text-centered" style=" font-family:Bahnschrift;padding:1em 1em 1em 1em; color: green; border-radius: 5px; height: 40px;">
              {{ session('status') }}
            </div>
            @endif
          @if(count(@accounts))
          <label class="level-left" style="font-family:Bahnschrift; font-size: 30px; padding-left:1em; padding-top:2em; opacity: 0.5;">Accepting New Instructors Accounts</label>
          <p class="level-left" style="padding-left:2em; margin-bottom: 1em;opacity: 0.6; color: green; font-family:Bahnschrift;">Request List</p>
        <table class="table is-fullwidth">
           <tr style="background-color: grey; font-family:Bahnschrift;  color:white;">
            <th>ID</th>
            <th>Instructor First Name</th>
            <th>Instructor Last Name</th>
            <th>Email</th>
            <th>Accept</th>
           </tr>

            @foreach($accounts as $instructor)
           <tr>
            <td>{{$instructor-> id}}</td>
            <td>{{$instructor-> userFirstName}}</td>
            <td>{{$instructor-> userLastName}}</td>
            <td>{{$instructor-> email}}</td>
            <td><a href="/grantaccess/{{$instructor->id}}">Accept Account</a></td>
           </tr>
            @endforeach
        </table>
        @else
        hi
        @endif
        </div>
  </div>
</section>
@endsection('content')

