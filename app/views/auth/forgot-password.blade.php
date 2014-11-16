
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

				<h2>forgot-password</h2><br>
				{{ Form::open(array('to' => 'post_forgotPassword', 'class' => 'form-horizontal',
				'id' => 'edit-form', 'role' => 'form', 'files' => true))}}

				<form  method="post">
					<div class="field">
						Username: <input type="text" name="username"><br><br>
						Firstname: <input type="text" name="firstname"><br><br>
						Lastname: <input type="text" name="lastname"><br><br>
						Email : <input type="text" name="email"><br><br>
					</div>
					<br>
					<input type="submit" value="CONFIRM">
					{{Form::token()}}
				</form>
			</div>  
		</div>
	</div>
</body>
</html>