@extends('layout')

@section('content')

<center>
  <h2>Show {{$user->username}} like</h2>
  <br>
 @foreach($likes as $like)
 @if($like->user1==$user->username && $like->addfriend==0)
 	<a href ="/profile/{{$like->user2}}">
 	{{$like->user2}}
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