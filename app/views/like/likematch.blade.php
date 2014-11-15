@extends('layout')
@section('content')


<center>
  <h2>Like Match Success</h2>
  <br>
  {{$user->username}} <h7>add </h7>
  {{$username}} <h7>success</h7>
</center>




<!-- show profile and contact information-->

<div id="profilebox" style="margin-top:50px" >
  <div class="container">
    <div class="row">
      <center>
        <h1><u>{{$username}} Profile</u></h1>
      </center>
      <br>
      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
        <div class="panel panel-info">
          <div class="panel-heading">
            <h3 class="panel-title">{{$username }}</h3>
          </div>
          <div class="panel-body">
            <div class="row">
              <div class="col-md-3 col-lg-3 " align="center"><img alt="User Pic" src="/picture/{{$profilepicture}}" width="100" height="100" class="img-circle"> </div>
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
                      <tr>
                        <td>Telephone :</td>
                        <td>{{$tel}}</td>
                      </tr>
                        <tr>
                        <td>E-mail :</td>
                        <td><a href="mailto:info@support.com">{{$email}}</a></td>
                      </tr>
                      <tr>
                        <td>Line ID :</td>
                        <td>{{$lineid}}</td>
                      </tr>
                        <td>Facebook :</td>
                        <td>{{$facebook}}
                        </td>        
                      </tr>                     
                    </tbody>
                  </table>                  
                </div>
              </div>
            </div>
            <div class="panel-footer">
              <span class="pull-right">
                <a href="/showprofile" >
                  <button id="btn-showprofile" type="submit" class="btn btn-success">Back To Your Profile</button>
                </a>         
                <a href="chatbox" >
                  <button id="btn-ok" type="submit" class="btn btn-success">Chat</button>
                </a>          
              </span>
              <br><br>
            </div>
          </div>  
        </div>
      </div>
    </div>
  </div>
</div>

@stop
 
