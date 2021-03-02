<?php 


$datetime = new DateTime('tomorrow');
session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    	<script src= 
    "https://smtpjs.com/v3/smtp.js"> 
  </script> 
    <script type="text/javascript"> 
  	var email = '<?php echo $_SESSION['email'];  ?>';
    function sendEmail() { 
      Email.send({ 
        Host: "smtp.gmail.com", 
        Username: "naturescloset19@gmail.com", 
        Password: "abhi2000(#)", 
        To: email, 
        From: "naturescloset19@gmail.com", 
        Subject: "Order status", 
        Body: "Order placed successfully.\n Your order no. is #N2635426 \n You can expect delivery within 2 days. \n Thank you for shopping with us. \n Have a nice day!!", 
      }) 
        .then(function (message) { 
          alert(email) 
        }); 
    } 
  </script> 
	<title>Payment Gateway</title>
</head>
<body>
	<center><div class="box">
		<h2>Order placed :)</h2>
		<img src="">
		
	
	<img src="Images/order.jpg">
     <h3>Your order has been placed succesfully.</h3> <br><h4> Thank you for shopping with us!! </h4>
     Delivering to  <?php echo $_SESSION['address'];  ?> <br>
     <br>
     Your order will be delivered to by <?php echo $datetime->format('Y-m-d ') ;  ?><br><br>
       <form method="post"> 
    <input type="button" value="Send Email" 
        onclick="sendEmail()" /> 
  </form>  
</div></center>
</body>
</html>
<style type="text/css">
	.box
	{
			
	
		width: 300px;
		height: 600px;
		background: white;
		padding-top: 20px;
		border-radius: 20px;

	}
	
		body
	{
			background: radial-gradient(#fff,#ffd6d6);
			font-family: 'Barlow Condensed', sans-serif;

	}
	input
	{
		height: 40px;
		width: 80px;
		color: white;
		background-color:  #ff523b;


	border-radius: 30px;
	}
</style>