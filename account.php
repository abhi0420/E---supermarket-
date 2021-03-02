<?php 



session_start();
 ?>












<!DOCTYPE html>
<html>
<head>
	<title>Account</title>
	<link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.css" type="text/css" />

    <link href="/style.css?v=1.1" rel="stylesheet" type="text/css" />
	
</head>
<body>

<div class="header">
<div class="container">
	<div class="navbar">
<div class="logo">
	<img src="Images/logo.jpg" width="250px" height="200px">
</div>	
    <nav>
	    <ul>
		<li><a href="">Home</a></li>
		<li><a href="a.html">Products</a></li>
		<li><a href="">About</a></li>
		<li><a href="">Contact</a></li>
		<li><a href="account.php">Account</a></li>
	    </ul>

	


    </nav>

	<a href = "logout.php" class = 'logout'> LOGOUT </a>
</div>
<div class="info">	<h2>Account Information</h2>
	<br>

<p> <b>Username</b> <br><?php echo $_SESSION['username'];  ?> </p><br>
<p> <b>Address</b><br> <?php echo $_SESSION['address'];  ?> </p><br>
<p> <b>PIN</b><br> <?php echo $_SESSION['pin'];  ?> </p><br>
<p><b>Phone </b><br> <?php echo $_SESSION['phone'];  ?> </p><br>
<button><a href="updateform.php" class = 'update'>UPDATE INFO</a></button>
</div>
</body>
</html>

<style type="text/css">
	*{
	margin: 0;
	padding: 0;
	box-sizing: border-box;
}	
body
{
	font-family: -apple-system, BlinkMacSystemFont, "San Francisco", Helvetica, Arial, sans-serif;
	background: radial-gradient(#fff,#ffd6d6);

}

.navbar
{
	display: flex;
	align-items: center;
	padding: 20px;

}
nav{
	flex: 1;
	text-align: right;
}
nav ul
{
	display: inline-block;
	list-style-type: none;

}
nav ul li
{
	display: inline-block;
	margin-right: 20px;
}
a
{
	text-decoration: none;
	color: #555;
}
.update
{
	color: white;
}
.info
{
	height: 500px;
	width: 300px;
	background-color: white;
	padding-top: 20px;
	margin-left: 500px;
}
.info h2
{
	text-align: center;
	color: white;
	background-color: red;
	padding: 10px;
}

.info p
{
	margin-left: 20px;

}
button
{
		  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  width: auto;
  padding: 10px 18px;
}
.logout
{


  width: auto;
  padding: 10px 10px;
  background-color: #f44336;
  color: white;
}
</style>