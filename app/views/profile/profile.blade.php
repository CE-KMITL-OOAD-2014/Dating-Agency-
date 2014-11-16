@extends('layout')

@section('content')

<center>
  	<h2>" Show all User " </h2>
  	<br><br>
 	@foreach($users as $user)
 		<a href ="profile/{{$user->username}}">
 			<h3>{{$user->username}}</h3>
		</a> 
  @endforeach
</center>

 
@stop