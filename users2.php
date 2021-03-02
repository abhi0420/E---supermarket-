<?php


session_start();

$conn = mysqli_connect('localhost','root','');

if($conn->connect_error){
	die('connection failed  : '.$conn->connect_error);

}
else
{
mysqli_select_db($conn,'registration');	


$stmt2 =  " select * from user ";	
$records2 = mysqli_query($conn,$stmt2);
 $name = filter_input(INPUT_POST, 'name');
 $email = filter_input(INPUT_POST, 'email');
 $address = filter_input(INPUT_POST, 'address');
 $pin = filter_input(INPUT_POST, 'pin');
 $phone = filter_input(INPUT_POST, 'phone');

$user=mysqli_fetch_assoc($records2);


	

}

?>

<html>
<head>
	<title> display</title>
</head>
<body>


<center>User Records </center>
<center><table width="600" border="1" cellpadding="1" cellspacing="1">
	<tr>
		<th> Name</th>
		<th>Email</th>
		<th>Address</th>
		<th>Pin</th>
		<th>Phone</th>
		
	</tr>
	<?php

	while($user)
	{
 

		echo "<tr>";
			echo "<td>".$user["name"]."</td>>";
			echo "<td>".$user["email"]."</td>";
			echo "<td>".$user["address"]."</td>";
			echo "<td>".$user["pin"]."</td>";
			echo "<td>".$user["phone"]."</td>";


		echo "</tr>";
	}
?>	
</table>
<br>
<br>
<a href="delete.html" class="cancelbtn" >Remove Records</a>
</center>


<style type="text/css">
	table {

  border-collapse: collapse;
}

table, th, td {
  border: 1px solid black;
padding: 15px;
  text-align: left;
 border-bottom: 1px solid #ddd;
}
tr:hover {background-color: #f5f5f5;}
tr:nth-child(even) {background-color: #f2f2f2;}
th {
  height: 50px;
text-align: left;
  background-color: #4CAF50;
  color: white;
}
* {
    font-family: -apple-system, BlinkMacSystemFont, "San Francisco", Helvetica, Arial, sans-serif;
  font-weight:  300;
  margin:  0;
}
table
{
	border-radius: 50px;
}
.cancelbtn{
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
    width: auto;
  padding: 10px 18px;
  background-color: #f44336;
  border-radius: 10px;
  text-decoration: none;
}
</style>
</body>
</html>