<html>
<title>Test Something</title>
<head>
	{{ HTML:: style('bootstrap-3.2.0-dist/css/bootstrap.css')}}
	{{ HTML:: script('bootstrap-3.2.0-dist/js/jquery-1.11.1.min.js')}}
	{{ HTML:: script('bootstrap-3.2.0-dist/js/bootstrap.min.js')}}
</head>
<body>
<div class="containner">
	<div class="row-clearfix">
       <div class ="col-md-12">
		@yield('content')
	  </div>
    </div>
</div>
</body>

</html>
