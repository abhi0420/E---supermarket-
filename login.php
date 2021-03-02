<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Login and Sign up</title>

	<link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.css" type="text/css" />

    <link href="/style.css?v=1.1" rel="stylesheet" type="text/css" />


</head>
<body>

<div class="container">
	<div class="login-box">
	<div class="row">
		<div class="col-md-6 login-left">
			<h2> Login </h2><br>
			<form action="valid.php" method = "post">
				<div class = "form-group">
					<label>Registered Email</label>
					<input type="text" name="email" class = "form-control" required>
				</div>
				<div class = "form-group">
					<label>Password</label>
					<input type="password" name="password" class = "form-control" required>
				</div>
				<button type="submit" class = "btn btn-primary">Login </button>
                
			</form>
			<a href="registration.php"> New user?</a>
			<a href="admin.php" class = 'admin'> Admin?</a>
		</div>


	</div>
</div>
</div>

</body>

</html>
<style type="text/css">
	body{
	
	background-size: cover;
	background-position: center;
	background: linear-gradient(rgba(0,0,50,0.5),rgba(0,0,50,0.5)),url("Images/img.jpg") no-repeat fixed center;
	
}
.login-box{
	max-width: 700px;
	float: none;
	margin: 150px auto;
}
.login-left{
	background: #fff;
	padding: 30px;
}
.login-right{
	background: #fff;
	padding: 30px;
	
}
.form-control{
	background-color: transparent !important ;
}
.admin
{
	color: red;
	padding-left: 150px;
}
</style>