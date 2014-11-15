@extends('layout')

@section('content')


<center>
  <h2>Username : {{$user->username}}</h2>
  <br><br>
</center>

{{ Form::open(array('to' => 'post_changePassword', 'class' => 'form-horizontal',
                'id' => 'edit-form', 'role' => 'form', 'files' => true))}}
    <!------ when error ------>
    <div id="editalert" style="display:none" class="alert alert-danger">
        <p>Error:</p>
    </div>
             
    <form id="loginform" action="login" class="form-horizontal" role="form" method="POST">              
        <!------ insert new password ------>
        <div class="form-group">
                  <label for="new_password" class="col-md-3 control-label">New Password</label>
              <div class="col-md-3">
                  <input type="text" class="form-control" name="new_password" placeholder="new password">
                </div>
              </div>
              <div class="form-group">                                       
                  <div class="col-md-offset-3 col-md-9">
                      <button id="btn-signup" type="submit" class="btn btn-info"><i class="icon-hand-right"></i> &nbspCONFIRM  </button>                     
                  </div>
              </div>
        </div>
        {{Form::hidden('id',$user->id)}}
        {{Form::close()}}
    </form>
                



@stop