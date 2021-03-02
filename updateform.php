<!DOCTYPE html>
<html>
<head>
	<title>Update details</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.css" type="text/css" />
</head>
<body>
	<div class="container">
	<div class="login-box">
	<div class="row">
		<div class="col-md-6 login-right">
			<h2> Enter your new details</h2>
			<form action="update.php" method = "post">
				<div class = "form-group">
					<label>Username</label>
					<input type="text" name="user" class = "form-control" required>
				</div>

				<div class = "form-group">
					<label>Address</label>
					<input type="text" name="address" class = "form-control" required>
				</div>
				<div class = "form-group">
					<label>Pin code</label>
					<input type="text" name="pin" class = "form-control" required>
				</div>
				<div class = "form-group">
					<label>Phone no.</label>
					<input type="text" name="phone" class = "form-control" required>
				</div>

				<button type="submit" class = "btn btn-primary">UPDATE</button>

			</form>
		</div>

	</div>
</div>
</div>

</body>
</html>
<style type="text/css">
	body{
	

	background: linear-gradient(rgba(0,0,50,0.5),rgba(0,0,50,0.5)),url("Images/img.jpg") no-repeat fixed center;
	
}
.login-box{
	max-width: 700px;
	float: none;
	margin: 150px auto;
}
.login-left{
	background: rgba(211,211,211,0.5);
	padding: 30px;

}
.login-right{
	background: #fff;
	padding: 30px;
	
}
.form-control{
	background-color: transparent !important ;
}
</style>