@extends('layout')

@section('content')
               

        
    <div id="signupbox" style="margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
    <div class="panel panel-info">
        <div class="panel-heading">
            <div class="panel-title">Sign Up</div>
        </div>  
        <div class="panel-body" >
                {{ Form::open(array('to' => 'register', 'class' => 'form-horizontal',
                'id' => 'signup-form', 'role' => 'form', 'files' => true))}}

                <div id="signupalert" style="display:none" class="alert alert-danger">
                    <p>Error:</p>
                    <span></span>
                </div>
             
                 <div class="form-group">
                    <label for="email" class="col-md-3 control-label">Username</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="username" placeholder="Username">
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="password" class="col-md-3 control-label">Password</label>
                    <div class="col-md-9">
                        <input type="password" class="form-control" name="password" placeholder="Password">
                    </div>
                </div>

                <div class="form-group">
                    <label for="firstname" class="col-md-3 control-label">First Name</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="firstname" placeholder="First Name">
                    </div>
                </div>
                <div class="form-group">
                    <label for="lastname" class="col-md-3 control-label">Last Name</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="lastname" placeholder="Last Name">
                    </div>
                </div>


                <div class="form-group">
                    <label for="age" class="col-md-3 control-label">Age</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="age" placeholder="Age">
                    </div>
                </div>

                <div class="form-group">
                    <label for="gender" class="col-md-3 control-label">Gender</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="gender" placeholder="Gender">
                    </div>
                </div>


                <div class="form-group">
                    <label for="work" class="col-md-3 control-label">Work</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="work" placeholder="Work">
                    </div>
                </div>

                <div class="form-group">
                    <label for="interest" class="col-md-3 control-label">Interest</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="interest" placeholder="Interest">
                    </div>
                </div>

                <div class="form-group">
                    <label for="tel" class="col-md-3 control-label">Tel</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="tel" placeholder="Tel">
                    </div>
                </div>

               
                <div class="form-group">
                    <label for="email" class="col-md-3 control-label">Email</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="email" placeholder="Email Address">
                    </div>
                </div>

                <div class="form-group">
                    <label for="facebook" class="col-md-3 control-label">Facebook</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="facebook" placeholder="Facebook">
                    </div>
                </div>

                <div class="form-group">
                    <label for="lineid" class="col-md-3 control-label">Lineid</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="lineid" placeholder="Lineid">
                    </div>
                </div>

                        
               Please choose a file: <input type="file" name="profilepicture"><br>
                

                


               
                <botton href="#" onClick="$('#signupbox').hide(); $('#page1').show()">
                    <botton class="btn btn-lg btn-info"> NEXT </button>
                    </botton>
                

            
        </div>
    </div>

</div>
</div>












<!--------- Guideline Page 1 -------------------->
<div id="page1" style="display:none; margin-top:50px" >
<center>
<img alt="Guideline Pic" src="/guideline/guideline1.jpg">
<br><br>
<span class="pull-right">

<div class="col-md-12 control">
                     <botton href="#" onClick="$('#page1').hide(); $('#page2').show()">
                    <botton class="btn btn-lg btn-info"> NEXT </button>
                    </botton>
</div>
</span>
</center>
</div>

<!--------- Guideline Page 2 -------------------->
<div id="page2" style="display:none; margin-top:50px" >
<center>
<img alt="Guideline Pic" src="/guideline/guideline2.jpg">
<br><br>
<span class="pull-right">

<div class="col-md-12 control">
                     <botton href="#" onClick="$('#page2').hide(); $('#page3').show()">
                    <botton class="btn btn-lg btn-info"> NEXT </button>
                    </botton>
</div>
</span>
</center>
</div>

<!--------- Guideline Page 3 -------------------->
<div id="page3" style="display:none; margin-top:50px" >
<center>
<img alt="Guideline Pic" src="/guideline/guideline3.jpg">
<br><br>
<span class="pull-right">

<div class="col-md-12 control">
                     <botton href="#" onClick="$('#page3').hide(); $('#page4').show()">
                    <botton class="btn btn-lg btn-info"> NEXT </button>
                    </botton>
</div>
</span>
</center>
</div>
<!--------- Guideline Page 4 -------------------->
<div id="page4" style="display:none; margin-top:50px" >
<center>
<img alt="Guideline Pic" src="/guideline/guideline4.jpg">
<br><br>

<div class="form-group">                                       
                    <!--div class="col-md-offset-3 col-md-9"-->
                        <button id="btn-signup" type="submit" class="btn btn-lg btn-info"><i class="icon-hand-right"></i> &nbsp Sign Up</button>
                       
                    
                </div>

{{Form::close()}}
</div>

</center>

@stop
                   
      



    