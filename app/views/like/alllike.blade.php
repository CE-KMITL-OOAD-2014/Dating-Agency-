@extends('layout')

@section('content')

<center>
  	<h2>" Show {{$user->username}} like "</h2>
  	@foreach($likes as $like)
  	@if($like->user_sendlike==$user->username && $like->likematchstate==0)
  	<a href ="/profile/{{$like->user_receivelike}}">
  		<h3>{{$like->user_receivelike}}</h3>
  	</a>
  	@endif
  	@endforeach
</center>
 
@stop