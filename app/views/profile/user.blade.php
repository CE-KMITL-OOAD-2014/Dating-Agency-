@extends('virtualitem')

@section('profile')
<div id="likebox" style=" margin-top:50px;" >                    
    <center>
        <h2>Like Selection</h2>
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> origin/master
        <!--
         <botton href="#" onClick="$('#likebox').hide(); $('#virsualbox').show()">
         -->
         <a href="/profile/{{$user->username}}/like" onClick="$('#likebox').hide()">
<<<<<<< HEAD
=======
        <button type="button" class="btn btn-danger btn-circle btn-lg"><i class="glyphicon glyphicon-heart"></i></button>
        </a>

    <!--//////////////////////////////////////change signupbox to nextprofile////////////////////////////////////////>
       <///botton href="showprofile" onClick="$('#likebox').hide();>
        <///a href="profile" onClick="$('#likebox').hide(); $('#likebox').show()">
        -->
        <a href="/profile" onClick="$('#likebox').hide(); $('#likebox').show()">
=======
        <botton href="#" onClick="$('#likebox').hide(); $('#virsualbox').show()">
>>>>>>> origin/master
        <button type="button" class="btn btn-danger btn-circle btn-lg"><i class="glyphicon glyphicon-heart"></i></button>
        </a>

    <!--//////////////////////////////////////change signupbox to nextprofile////////////////////////////////////////>
       <///botton href="showprofile" onClick="$('#likebox').hide();>
        <///a href="profile" onClick="$('#likebox').hide(); $('#likebox').show()">
<<<<<<< HEAD
        -->
        <a href="/profile" onClick="$('#likebox').hide(); $('#likebox').show()">
=======
        <a href="http://localhost/profile" onClick="$('#likebox').hide(); $('#likebox').show()">
>>>>>>> origin/master
>>>>>>> origin/master
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
<<<<<<< HEAD
             <div class="panel-body">
               <div class="row">
               <div class="col-md-3 col-lg-3 " align="center"><img alt="User Pic" src="/picture/{{ $user->profilepicture }}" width="100" height="100" class="img-circle"> </div>
=======
<<<<<<< HEAD
             <div class="panel-body">
               <div class="row">
               <div class="col-md-3 col-lg-3 " align="center"><img alt="User Pic" src="/picture/{{ $user->profilepicture }}" width="100" height="100" class="img-circle"> </div>
=======

             <div class="panel-body">
               <div class="row">
                <div class="col-md-3 col-lg-3 " align="center"><img alt="User Pic" src="/picture/{{ $user->profilepicture }}" width="100" height="100" class="img-circle"> </div>
>>>>>>> origin/master
>>>>>>> origin/master
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
                        <!--
                           <a type="button"  href="edit.html" class="btn btn-primary">Edit Profile</a>
                                        <a type="button" href="http://localhost/laravel/public/register" class="btn btn-primary">Logout</a>
                                                -->                                                                                             
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> origin/master
                                                <form action = "logout" method = "get">
                                                <div class="col-sm-12 controls">
                                                        <a type="button"  href="/showprofile"class="btn btn-primary">Back To Your Profile</a>
                                                        <!--button id="btn-logout" type="submit" class="btn btn-primary">Logout</button-->
                                                        </div>
                                                        </form>
<<<<<<< HEAD
=======
=======
                    <form action = "logout" method = "get">
                      <div class="col-sm-12 controls">
                      <a type="button"  href="http://localhost/showprofile"class="btn btn-primary">Back To Your Profile</a>
                      </div>
                    </form>
>>>>>>> origin/master
>>>>>>> origin/master
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


<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> origin/master
    @stop



<<<<<<< HEAD
   
=======
   
=======
    @stop
>>>>>>> origin/master
>>>>>>> origin/master
