<html>
<title>Dating-Agency</title>
<head>
  {{ HTML:: style('bootstrap-3.2.0-dist/css/bootstrap.css')}}
  {{ HTML:: script('bootstrap-3.2.0-dist/js/jquery-1.11.1.min.js')}}
  {{ HTML:: script('bootstrap-3.2.0-dist/js/bootstrap.min.js')}}
</head>
<body>
  <div class="containner">
    <div class="row-clearfix">
      <div class ="col-md-10">
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
    </div>  
  </div>
</div>
</body>
</html>