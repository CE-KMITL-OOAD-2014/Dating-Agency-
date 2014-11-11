@extends('layout')

@section('content')
<div id="likebox" style=" margin-top:50px;" >                    
    <center>
        <h2>Like Selection</h2>


         <a href="/profile/{{$user->username}}/like" onClick="$('#likebox').hide()">
        <button type="button" class="btn btn-danger btn-circle btn-lg"><i class="glyphicon glyphicon-heart"></i></button>
        </a>


        <a href="/profile/{{$user->username}}/dislike" onClick="$('#likebox').hide(); $('#likebox').show()">
        <button type="button" class="btn btn-warning btn-circle btn-lg"><i class="glyphicon glyphicon-remove"></i></button>
        </a>



<div class="container">
      <div class="row">
      <br><br>
       <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title"> {{$user->username}} </h3>
             </div>


             <div class="panel-body">
               <div class="row">
                <div class="col-md-3 col-lg-3 " align="center"><img alt="User Pic" src="/picture/{{ $user->profilepicture }}" width="100" height="100" class="img-circle"> </div>

                 <div class=" col-md-9 col-lg-9 "> 
                   <table class="table table-user-information">
                     <tbody>
                      <tr>
                        <td>First Name :</td>
                        <td>{{$user ->firstname}}</td>
                      </tr>
                      <tr>
                        <td>Last Name :</td>
                        <td>{{$user ->lastname}}</td>
                      </tr>

                      <tr>
                        <td>Age :</td>
                        <td>{{$user ->age}}</td>
                      </tr>
                   
                         <tr>
                             <tr>
                        <td>Gender :</td>
                        <td>{{$user ->gender}}</td>
                      </tr>
                        <tr>
                        <td>Work :</td>
                        <td>{{$user ->work}}</td>
                      </tr>    
                       <tr>
                        <td>Interest :</td>
                        <td>{{$user ->interest}}</td>
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


