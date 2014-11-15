@extends('layout')
@section('content')

<div id="likebox" style=" margin-top:50px;" >                    
  <center>
    <h2>Like Selection</h2>
    <a href="/profile/{{$username}}/like" onClick="$('#likebox').hide()">
      <button type="button" class="btn btn-danger btn-circle btn-lg"><i class="glyphicon glyphicon-heart"></i></button>
    </a>
    <a href="/profile/{{$username}}/dislike" onClick="$('#likebox').hide(); $('#likebox').show()">
      <button type="button" class="btn btn-warning btn-circle btn-lg"><i class="glyphicon glyphicon-remove"></i></button>
    </a>
    <div class="container">
      <div class="row">
      <br><br>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title"> {{$username}} </h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center">
                  <img alt="User Pic" src="/picture/{{ $profilepicture }}" width="100" height="100" class="img-circle"> 
                </div>
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>First Name :</td>
                        <td>{{$firstname}}</td>
                      </tr>
                      <tr>
                        <td>Last Name :</td>
                        <td>{{$lastname}}</td>
                      </tr>
                      <tr>
                        <td>Age :</td>
                        <td>{{$age}}</td>
                      </tr>                  
                      <tr>
                        <td>Gender :</td>
                        <td>{{$gender}}</td>
                      </tr>
                        <tr>
                        <td>Work :</td>
                        <td>{{$work}}</td>
                      </tr>    
                       <tr>
                        <td>Interest :</td>
                        <td>{{$interest}}</td>
                      </tr>
                    </tbody>
                  </table> 
                </div>
              </div>
            </div>
            <div class="panel-footer">
              <span class="pull-right">                                                                                          
                <form action = "backtoyourprofile" method = "get">
                  <div class="col-sm-12 controls">
                    <a type="button"  href="/showprofile"class="btn btn-primary">Back To Your Profile</a>
                  </div>
                </form>
              </span>
              <br><br>
            </div>                    
          </div>
        </div>
      </div>
    </div>
  </div>
</center>
</div>


    @stop


