@extends('layout')
@section('content')

<div id="profilebox" style="margin-top:50px" >
  <div class="container">
    <div class="row">
      <center>
        <h1><u>Your Profile</u></h1>
      </center>
      <br>
      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
        <div class="panel panel-info">
          <div class="panel-heading">
            <h3 class="panel-title">{{$username }}</h3>
          </div>
          <div class="panel-body">
            <div class="row">
              <div class="col-md-3 col-lg-3 " align="center">
                <img alt="User Pic" src="picture/{{ $profilepicture }}" width="100" height="100" class="img-circle"> 
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
                    <tr>
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
                    <tr>
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
              <form action = "logout" method = "get">
                <div class="col-sm-12 controls">
                  <a type="button"  href="/show_all_friends" class="btn btn-primary">Show all friends</a>
                  <a type="button"  href="/show_all_likes" class="btn btn-primary">Show all likes</a>
                  <a type="button"  href="/editprofile/{{$username}}" class="btn btn-primary">Edit Profile</a>
                  <button id="btn-logout" type="submit" class="btn btn-primary">Logout</button>
                </div>
              </form>
            </span>
            <br><br>
          </div>
        </div>
        <span class="pull-right">
            <a href="/profile" >
              <button id="btn-showotherprofile" type="submit" class="btn btn-success">Show Other Profile</button>
            </a>
            <a href="/receive-message" >
              <button id="btn-showotherprofile" type="submit" class="btn btn-success">Show Receive Message</button>
            </a>
            <a href="/receive-virtual" >
              <button id="btn-showotherprofile" type="submit" class="btn btn-success">Show Receive Virtual Items</button>
            </a>        
        </span>
      </div>
    </div>
  </div>
</div>


@stop

