@extends('layout')

@section('content')

<center>
  <h2>Like Success</h2>
  <br>

 {{$user->username}} <h7>like</h7>
  {{$user_like->username}} <h7>success</h7>
 

</center>

<a href="virtualitem" >
                  <button id="SendVirtualItem" type="submit" class="btn btn-success">SendVirtualItem</button>
                </a>
                                  
@stop