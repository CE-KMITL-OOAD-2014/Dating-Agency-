@extends('layout')
@section('content')
<!--------- Guideline Page 1 -------------------->
<div id="page1" style=" margin-top:50px" >
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
       <span class="pull-right">
            <div class="col-md-12 control">
            	<a href="/showprofile">
            		<botton class="btn btn-lg btn-info"> NEXT </button>
        		</a>
        	</div>
        </span>
    </div>
</center>
@stop