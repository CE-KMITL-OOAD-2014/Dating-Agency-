
@extends('layout')

@section('content')


<div id="profilebox" style="margin-top:50px" >
  <div class="container">
    <div class="row">
      <center>
        <h1><u>Send Message</u></h1>
      </center>
      <br>

      <!-- if user send message to other user -> show in pull right-->
      @if($chats!=NULL)
      @foreach($chats as $chat)
        @if($chat->sender==$user_send->username && $chat->receiver==$user_receive)
          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
            <div class="panel panel-info">
              <div class="panel-heading">
                <h3 class="panel-title"><span class="pull-right">FORM : {{$user_send ->username }}</span></h3><br>
                <h3 class="panel-title"><span class="pull-right">TO : {{$user_receive}}</span></h3><br>             
              </div>
                      
            <div class="panel-body">
              <div class="row">
                <div class=" col-md-20 col-lg-20 "> 
                  <table class="table table-user-information">
                    <tbody>
                      <div class="panel-heading">
                        <span class="pull-right"><h4>{{$chat->message}}</span></h4>
                      </div>
                    </tbody>
                  </table>   
                </div>              
              </div>
            </div>          
          </div>
        </div>

        <!-- if other user send message to user -> show in pull left-->
        @elseif($chat->sender==$user_receive && $chat->receiver==$user_send ->username)
          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
            <div class="panel panel-info">
              <div class="panel-heading">
                <h3 class="panel-title">FORM : {{$user_receive}}</h3>
                <h3 class="panel-title">TO : {{$user_send ->username }}{{$user_receive}}</h3>          
              </div>
              <div class="panel-body">
                <div class="row">
                  <div class=" col-md-9 col-lg-9 "> 
                    <table class="table table-user-information">
                      <tbody>                  
                        <h4>{{$chat->message}}</h4>     
                      </tbody>
                    </table>                 
                  </div>
                </div>
              </div>
            </div>
          </div>
        @endif
      @endforeach 
      @endif


      <!-- send message box-->
      <div class="row">
      <br>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title"><span class="pull-right">FORM : {{$user_send ->username }}</span></h3><br>
              <h3 class="panel-title"><span class="pull-right">TO : {{$user_receive }}</span></h3><br>
            </div>                
            <div class="panel-body">
              <div class="row">             
                <div class=" col-md-9 col-lg-9 "> 

                  <table class="table table-user-information">
                    <tbody>
                      <div id="editalert" style="display:none" class="alert alert-danger">
                        <p>Error:</p>
                      </div>
                      <!--insert message-->
                      {{ Form::open(array('to' => 'editprofile', 'class' => 'form-horizontal',
                        'id' => 'edit-form', 'role' => 'form', 'files' => true))}}                
                      <form id="chatform"  class="form-horizontal" role="form" method="POST">
                      <div class="form-group">
                        <label for="message" class="col-md-9 control-label"><h4>Message : </h4></label>
                        <br>
                        <div class="col-md-9">
                          <p> {{Form::textarea('message')}}</p>
 							          </div>
                      </div>       
                    </tbody>
                  </table>
                  
                </div>
              </div>
            </div>
            <div class="panel-footer">
                <span class="pull-right">                            
                  <div class="form-group">                                       
                   	<div class="col-md-offset-3 col-md-9">
                      	<button id="btn-signup" type="submit" class="btn btn-info"><i class="icon-hand-right"></i> &nbspCONFIRM </button>
                    </div>
                	</div>
                </span>
                <br><br>
              </div>
            </div>
            {{Form::close()}}
            <span class="pull-right">
              <div class="col-md-12 control">
                <a href="/showprofile" >
                  <button id="btn-showotherprofile" type="submit" class="btn btn-success"> EXIT </button>
                </a>
              </div>
            </span>
        </div>
      </div>
    </div>
</div>

@stop
