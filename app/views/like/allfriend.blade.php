@extends('layout')

@section('content')

<center>
	<h2>Show {{$user->username}} friends</h2>
  	<br>
 	@foreach($likes as $like)
 		@if($like->user_sendlike==$user->username && $like->likematchstate==1)
 			<a href ="profile/{{$like->user_receivelike}}/likematch">
 				{{$like->user_receivelike}}
 				<br>
			</a>
		@endif
  	@endforeach
</center>
<br><br>
<a href ="showprofile">
 	Back To Your Profile
</a>
 
@stop