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
		<li><a href="home.php">Home</a></li>
		<li><a href="products.html">Products</a></li>
		<li><a href="Aboutus.php">About</a></li>
		<li><a href="contactus.php">Contact</a></li>
		<li><a href="account2.php">Account</a></li>
	    </ul>

	

          
    </nav>
    <a href = "logout.php" class="logout" > LOGOUT </a>

</div>
<div class="info">	<h1>Contact Us</h1><br><br>
	<p>At Nature's Closet, we value your feedback and are always available to answer your queries.</p>
	<p> You can mail your queries and feedback to : <br>
 <a href="mailto:naturesclosett@gmail.com" class="link">naturescloset@gmail.com</a>
</p>
	


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
	font-family: 'Barlow Condensed', sans-serif;
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
.link
{
color: red;
}

.info
{
	height: 500px;
	width: 300px;
	background-color: white;
	padding-top: 20px;
	margin-left: 500px;
}
.info h1
{
	text-align: center;
	
	position: relative;
	line-height: 68px;
	color: #555;
}

.info p
{
	margin-left: 20px;


}
.logout
{


  width: auto;
  padding: 10px 10px;
  background-color: #f44336;
  color: white;
}
</style>