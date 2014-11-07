@extends('layout')

@section('content')

<center>
  <h2>Like Success</h2>
  <br>

 {{$user->username}} <h7>like</h7>
  {{$user_like->username}} <h7>success</h7>
 

</center>
 <form action = "SendVirtualItem" method = "get">
                            <div class="col-sm-12 controls">
                                <button id="btn-sendvirtualitem" type="submit" class="btn btn-primary">SendVirtualItem</button>
                                </div>
                            </form>
@stop