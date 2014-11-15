
@extends('layout')
@section('content')

<center>
    <h1><u>RECEIVER MESSAGE</u></h1>
</center>

<div id="receive_messagebox" style="margin-top:50px" >
  <div class="container">      
    @foreach($chats as $chat)
      @if($chat->receiver==$user->username)      
        <div class="row">
        <br>
          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
            <div class="panel panel-info">
              <div class="panel-heading">  	 
                <h3 class="panel-title">FROM : 
                  <a href ="profile/{{$chat->sender}}/chatbox">
                    {{$chat->sender}}
                  </a>
                </h3>     
              </div>
              <div class="panel-body">
                <div class="row">               
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>Message :</td>
                        <td>{{$chat->message}}</td>
                      </tr>                 
                    </tbody>
                  </table>                  
            	   </div>
				      </div>
				    </div>
          </div>
        </div>
      </div>
    </div>
@endif
@endforeach		
 
<center>
	<a href="/showprofile" >
    <button id="btn-showotherprofile" type="submit" class="btn btn-success"> Back To Your Profile </button>
  </a>              
</center>
                

   
@stop
 
