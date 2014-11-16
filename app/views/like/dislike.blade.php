@extends('layout')

@section('content')

<center>
    <h2>Dislike Success</h2>
   	<br>
    {{$user->username}} <h7>dislike</h7>
    {{$user_dislike}} <h7>success</h7>
</center>

<div class="col-sm-12 controls">
    <a href="/profile" >
        <button id="btn-ok" type="submit" class="btn btn-primary">OK</button>
    </a>
</div>

@stop
 