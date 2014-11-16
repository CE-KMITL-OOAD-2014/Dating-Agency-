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
					<a href="/change-password/{{$user->username}}">
						<h2>Change Password  </h2>
					</a><br>
				</center>
			</div>  
		</div>
	</div>
</body>
</html>

