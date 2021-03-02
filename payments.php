<?php 



session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<script src= 
    "https://smtpjs.com/v3/smtp.js"> 
  </script> 
  

	<title>Payments Gateway</title>
</head>
<body><center>
	<div class="payments">
		<h2>Payment Options</h2>
		<br>
		<img src="Images/paytm.jpg">
		<img src="Images/phonepe.jpg">
		<img src="Images/credit.jpg">
		<a href="cod.php"><button onclick="sendEmail()"><img src="Images/cod.jpg"></button></a>


	</div>
</center>
</body>
</html>

<style type="text/css">
	

body
{
	font-family: 'Barlow Condensed', sans-serif;
	background: radial-gradient(#fff,#ffd6d6);

}	div
	{
		width: 300px;
		height: 600px;
		background: white;
		padding-top: 20px;
		border-radius: 20px;

	}
	img
	{
		height: 100px;
		width: 250px;
		padding-bottom: 20px;
	}
	h2
	{
		font-family: sans-serif;
	}
</style>
  <script type="text/javascript"> 
  	var email = '<%= Session["email"] %>';
    function sendEmail() { 
      Email.send({ 
        Host: "smtp.gmail.com", 
        Username: "abhinandharish@gmail.com", 
        Password: "abhi2000(#)", 
        To: "abhiharish2000@gmail.com"
        From: "abhinandharish@gmail.com", 
        Subject: "Order status", 
        Body: "Order placed successfully. It will be delivered within 2 days", 
      }) 
        .then(function (message) { 
          alert("mail sent successfully") 
        }); 
    } 
  </script> 