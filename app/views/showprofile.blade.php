@extends('layout')

@section('content')
<br>welcome{{$user ->username }}this is profile page</br>
<li>Firstname:{{$user ->firstname}}</li>
<li>Lastname:{{$user ->lastname}}</li>
<li>Age:{{$user ->age}}</li>
<li>Gender:{{$user ->gender}}</li>
<li>Work:{{$user ->work}}</li>
<li>Interest:{{$user ->interest}}</li>
<li>Tel:{{$user ->tel}}</li>
<li>Email:{{$user ->email}}</li>
<li>Lineid:{{$user ->lineid}}</li>
<li>Facebook:{{$user ->facebook}}</li>

<div style="margin-top:10px" class="form-group">
                    <form action = "logout" method = "get">
                    <div class="col-sm-12 controls">
                      <button id="btn-logout" type="submit" class="btn btn-success">Logout</button>

                  </div>
              </div>


@stop
 