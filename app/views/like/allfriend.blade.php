@extends('layout')

@section('content')

<center>
  <h2>Show {{$user->username}} friends</h2>
  <br>
 @foreach($likes as $like)
 @if($like->user1==$user->username && $like->addfriend==1)
 	<a href ="profile/{{$like->user2}}/likematch">
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