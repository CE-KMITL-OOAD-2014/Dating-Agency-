@extends('layout')
@section('content')
<!--------- Guideline Page 1 -------------------->
<div class="col-md-10">
<div id="page1" >
    <center>
    <img alt="Guideline Pic" src="/guideline/guideline1.jpg" width="1000" height="500">
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
<div id="page2" style="display:none;" >
    <center>
    <img alt="Guideline Pic" src="/guideline/guideline2.jpg" width="1000" height="500">
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
<div id="page3" style="display:none; " >
    <center>
    <img alt="Guideline Pic" src="/guideline/guideline3.jpg" width="1000" height="500">
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
<div id="page4" style="display:none;" >
    <center>
    <img alt="Guideline Pic" src="/guideline/guideline4.jpg" width="1000" height="500">
    <br><br>
       <span class="pull-right">
            <div class="col-md-12 control">
            	<a href="/showprofile">
            		<botton class="btn btn-lg btn-info"> Show Profile </button>
        		</a>
        	</div>
        </span>
    </div>
</center>
</div>
@stop