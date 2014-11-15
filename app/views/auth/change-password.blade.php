@extends('layout')
@section('content')

<center>
  <h2>Username : {{$user->username}}</h2>
  <br><br>
  <a href="/change-password/{{$user->username}}">
    <h2>Change Password  </h2>
   </a><br>
</center>

 
@stop