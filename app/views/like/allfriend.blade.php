@extends('layout')

@section('content')

<center>
	<h2>" Show {{$user->username}} friends "</h2>
  	<br><br>
 	@foreach($likes as $like)
 		@if($like->user_sendlike==$user->username && $like->likematchstate==1)
 			<a href ="profile/{{$like->user_receivelike}}/likematch">
 				<h3>{{$like->user_receivelike}}</h3>
			</a>
		@endif
  	@endforeach
</center>

 
@stop