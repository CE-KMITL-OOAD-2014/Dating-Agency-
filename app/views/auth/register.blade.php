@extends('layout')
@section('content')

    <div class="container">    
      <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
        <div class="panel panel-info" >
          <div class="panel-heading">
              <div class="panel-title">Sign In</div>
                <!------ forgot password ------>
              <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="/forgot-password">Forgot password?</a></div>
            </div>     
            <div style="padding-top:30px" class="panel-body" >
              <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
              <form id="loginform" action="login" class="form-horizontal" role="form" method="POST">
                <!------ insert username ------>
                <div style="margin-bottom: 25px" class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="username">                                        
                </div>
                <!------ insert password ------>
                <div style="margin-bottom: 25px" class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                    <input id="login-password" type="password" class="form-control" name="password" placeholder="password">
                </div>
                <!------ remember token ------>
                <div class="input-group">
                  <div class="checkbox">
                    <label>
                      <input id="login-remember" type="checkbox" name="remember" value="1"> Remember me
                    </label>
                  </div>
                </div>
                <!------ log in botton ------>
                <div style="margin-top:10px" class="form-group">
                  <div class="col-sm-12 controls">
                      <button id="btn-login" type="submit" class="btn btn-success">Login  </button>
                  </div>
                </div>
                 <div class="form-group">
                <div class="col-md-12 control">
                    <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                      Don't have an account! 
                      <a href="/buildprofile" onClick="$('#loginbox').hide(); $('#signupbox').show()">
                        Sign Up Here
                      </a>
                    </div>
                  </div>
                </div>      
              </form>  
            </div>   
          </div>                     
        </div>  
    </div>
                 
@stop