@extends('layout')

@section('content')

<center>
  <h2>Show all User</h2>
  <br>
 @foreach($users as $user)
 
 <a href ="profile/{{$user->username}}">
 {{$user->username}}
 <br>
</a>
 
  @endforeach

  </center>
<br><br>
   <a href ="showprofile">
 Back To Your Profile
</a>
 


    @stop