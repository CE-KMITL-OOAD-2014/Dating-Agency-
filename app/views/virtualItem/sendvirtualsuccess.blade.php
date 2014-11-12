
@extends('layout')

@section('content')


<///////////////////send virtual box////////////////////>
    <center>
        <h2>{{$sender->username}} send virtual to {{$reciever->username}} success.</h2>
        <BR>    

                                    <img src="/virtualpic/{{$virtual->virtual}}.jpg" HEIGHT=230  WIDTH=230 alt="Bear" />
<br><br><br>
                            <div class="col-sm-12 controls">
                            <a href="/profile" >
                                <button id="btn-ok" type="submit" class="btn btn-primary">OK</button>
                                </a>
                                </div>
                                </BR>
                           </center>     
@stop