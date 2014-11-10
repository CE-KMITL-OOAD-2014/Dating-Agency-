@extends('layout')

@section('content')
               

        
    <div id="signupbox" style="margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
    <div class="panel panel-info">
        <div class="panel-heading">
            <div class="panel-title">sendvirtualitem</div>
        </div>  
        <div class="panel-body" >
                {{ Form::open(array('to' => 'insertvirtual', 'class' => 'form-horizontal',
                'id' => 'virtual-form', 'role' => 'form', 'files' => true))}}

                <div id="signupalert" style="display:none" class="alert alert-danger">
                    <p>Error:</p>
                    <span></span>
                </div>
                        
               <div class="form-group">
                    <label for="email" class="col-md-3 control-label">send</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="send" placeholder="virtualitem">
                    </div>
                </div>
                

                <div class="form-group">                                       
                    <div class="col-md-offset-3 col-md-9">
                        <button id="btn-select" type="submit" class="btn btn-info"><i class="icon-hand-right"></i> &nbsp Submit</button>
                       
                    </div>
                </div>
            {{Form::close()}}
        </div>
    </div>

</div>
</div>
@stop
                   
      



    