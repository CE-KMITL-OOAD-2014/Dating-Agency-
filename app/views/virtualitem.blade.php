extends('layout')

@section('content')


<//////////////////////virtual box///////////////////////////////////////////>
 <div id="virtualbox" style="margin-top:50px" >
        <!-- Reference: https://github.com/ashleydw/lightbox/ -->



<div class="container mt40">
    <section class="row">
        {{ Form::open(array('to' => 'register', 'class' => 'form-horizontal',
                'id' => 'virtual-form', 'role' => 'form', 'files' => true))}}
             <h2>Select Virtual Item</h2>
        <article class="col-xs-12 col-sm-6 col-md-3">
            <div class="panel panel-default">
                <div class="panel-body">
                 
                    </////change link & title>
                       <!-- <img src="/virtualpic/1.jpg" HEIGHT=230 WIDTH=230 alt="Send Heart" />-->
                        Please choose a file: <input type="file" name="inputvirtualpic"><br>
                
                </div>
                <div class="panel-footer">
                </////change link & title>
                    <h4>Send Heart</h4>
                    <botton href="#" onClick="$('#virtualbox').hide(); $('#sendvirtualbox').show()">
                    <a href="/sendvirtualsuccess" >
                    <botton id="select1" type="submit"class="btn btn-lg btn-info">Select1</button>
                    </a>
                    </botton>
                </div>
            </div>
        </article>

         <article class="col-xs-12 col-sm-6 col-md-3">
            <div class="panel panel-default">
                <div class="panel-body">
                    </////change link & title>
                        <img src="/virtualpic/2.jpg" HEIGHT=230  WIDTH=230 alt="Flower 1" />
                </div>
                <div class="panel-footer">
                </////change link & title>
                    <h4>Flower 1</h4>
                    <botton href="#" onClick="$('#virtualbox').hide(); $('#sendvirtualbox').show()">
                    <a href="/sendvirtualsuccess" >
                    <botton class="btn btn-lg btn-info">Select2</button>
                    </a>
                    </botton>
                </div>
            </div>
        </article>
                                 
        <article class="col-xs-12 col-sm-6 col-md-3">
            <div class="panel panel-default">
                <div class="panel-body">
                    </////change link & title>
                        <img src="/virtualpic/3.jpg" HEIGHT=230  WIDTH=230 alt="Flower 2" />
                </div>
                <div class="panel-footer">
                </////change link & title>
                    <h4>Flower 2</h4>
                    <botton href="#" onClick="$('#virtualbox').hide(); $('#sendvirtualbox').show()">
                    <a href="/sendvirtualsuccess" >
                    <botton class="btn btn-lg btn-info">Select3</button>
                    </a>
                    </botton>
                </div>
            </div>
        </article>

        <article class="col-xs-12 col-sm-6 col-md-3">
            <div class="panel panel-default">
                <div class="panel-body">
                    </////change link & title>
                        <img src="/virtualpic/4.jpg" HEIGHT=230  WIDTH=230 alt="Love you" />
                </div>
                <div class="panel-footer">
                </////change link & title>
                    <h4>Love you</h4>
                    <botton href="#" onClick="$('#virtualbox').hide(); $('#sendvirtualbox').show()">
                    <a href="/sendvirtualsuccess" >
                    <botton class="btn btn-lg btn-info">Select4</button>
                    </a>
                    </botton>
                </div>
            </div>
        </article>

        <article class="col-xs-12 col-sm-6 col-md-3">
            <div class="panel panel-default">
                <div class="panel-body">
                    </////change link & title>
                        <img src="/virtualpic/5.jpg" HEIGHT=230  WIDTH=230 alt="Smile with Heart" />
                </div>
                <div class="panel-footer">
                </////change link & title>
                    <h4>Smile with Heart</h4>
                    <botton href="#" onClick="$('#virtualbox').hide(); $('#sendvirtualbox').show()">
                    <a href="/sendvirtualsuccess" >
                    <botton class="btn btn-lg btn-info">Select5</button>
                    </a>
                    </botton>
                </div>
            </div>
        </article>
 
          <article class="col-xs-12 col-sm-6 col-md-3">
            <div class="panel panel-default">
                <div class="panel-body">
                    </////change link & title>
                        <img src="/virtualpic/6.jpg" HEIGHT=230  WIDTH=230 alt="Send Gift 1" />
                </div>
                <div class="panel-footer">
                </////change link & title>
                    <h4>Send Gift 1</h4>
                    <botton href="#" onClick="$('#virtualbox').hide(); $('#sendvirtualbox').show()">
                    <a href="/sendvirtualsuccess" >
                    <botton class="btn btn-lg btn-info">Select6</button>
                    </a>
                    </botton>
                </div>
            </div>
        </article>          

          <article class="col-xs-12 col-sm-6 col-md-3">
            <div class="panel panel-default">
                <div class="panel-body">
                    </////change link & title>
                        <img src="/virtualpic/7.jpg" HEIGHT=230  WIDTH=230 alt="Send Gift 2" />
                </div>
                <div class="panel-footer">
                </////change link & title>
                    <h4>Send Gift 2</h4>
                    <botton href="#" onClick="$('#virtualbox').hide(); $('#sendvirtualbox').show()">
                    <a href="/sendvirtualsuccess" >
                    <botton class="btn btn-lg btn-info">Select7</button>
                    </a>
                    </botton>
                </div>
            </div>
        </article>  

          <article class="col-xs-12 col-sm-6 col-md-3">
            <div class="panel panel-default">
                <div class="panel-body">
                    </////change link & title>
                        <img src="/virtualpic/8.jpg" HEIGHT=230  WIDTH=230 alt="Falling in Love 1" />
                </div>
                <div class="panel-footer">
                </////change link & title>
                    <h4>Falling in Love 1</h4>
                    <botton href="#" onClick="$('#virtualbox').hide(); $('#sendvirtualbox').show()">
                    <a href="/sendvirtualsuccess" >
                    <botton class="btn btn-lg btn-info">Select8</button>
                    </a>
                    </botton>
                </div>
            </div>
        </article>   

          <article class="col-xs-12 col-sm-6 col-md-3">
            <div class="panel panel-default">
                <div class="panel-body">
                    </////change link & title>
                        <img src="/virtualpic/9.jpg" HEIGHT=230  WIDTH=230 alt="Falling in Love 2" />
                </div>
                <div class="panel-footer">
                </////change link & title>
                    <h4>Falling in Love 2</h4>
                    <botton href="#" onClick="$('#virtualbox').hide(); $('#sendvirtualbox').show()">
                    <a href="/sendvirtualsuccess" >
                    <botton class="btn btn-lg btn-info">Select9</button>
                    </a>
                    </botton>
                </div>
            </div>
        </article>  

          <article class="col-xs-12 col-sm-6 col-md-3">
            <div class="panel panel-default">
                <div class="panel-body">
                    </////change link & title>
                        <img src="/virtualpic/10.jpg"  HEIGHT=230  WIDTH=230 alt="Like" />
                </div>
                <div class="panel-footer">
                </////change link & title>
                    <h4>Like</h4>
                    <botton href="#" onClick="$('#virtualbox').hide(); $('#sendvirtualbox').show()">
                    <a href="/sendvirtualsuccess" >
                    <botton class="btn btn-lg btn-info">Select10</button>
                    </a>
                    </botton>
                </div>
            </div>
        </article>  



          <article class="col-xs-12 col-sm-6 col-md-3">
            <div class="panel panel-default">
                <div class="panel-body">
                    </////change link & title>
                        <img src="/virtualpic/11.jpg" HEIGHT=230  WIDTH=230 alt="Bear" />
                </div>
                <div class="panel-footer">
                </////change link & title>
                    <h4>Bear</h4>
                    <botton href="#" onClick="$('#virtualbox').hide(); $('#sendvirtualbox').show()">
                    <a href="/sendvirtualsuccess" >
                    <botton class="btn btn-lg btn-info">Select11</button>
                    </a>
                    </botton>
                </div>
            </div>
        </article>  

          <article class="col-xs-12 col-sm-6 col-md-3">
            <div class="panel panel-default">
                <div class="panel-body">
                    </////change link & title>
                        <img src="/virtualpic/12.jpg"  HEIGHT=230  WIDTH=230 alt="Ring" />
                </div>
                <div class="panel-footer">
                </////change link & title>
                    <h4>Ring</h4>
                    <botton href="#" onClick="$('#virtualbox').hide(); $('#sendvirtualbox').show()">
                    <a href="/sendvirtualsuccess" >
                    <botton class="btn btn-lg btn-info">Select12</button>
                    </a>
                    </botton>
                </div>
            </div>
        </article>  

                <BR>
                <botton class="btn pull-right" href="#" onClick="$('#virtualbox').hide(); $('#likebox').show()">
                <a href="/sendvirtualsuccess" >
                    <botton class="btn btn-lg btn-info">Not Select</button>
                    </a>
                </botton>
        

<section>
{{Form::close()}}
</div>
 </div>

@stop



