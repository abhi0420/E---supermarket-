<?php
 $e_id = filter_input(INPUT_POST, 'email');


session_start();

$conn = mysqli_connect('localhost','root','');
mysqli_select_db($conn, 'registration');

if($conn->connect_error){
	die('connection failed  : '.$conn->connect_error);

}
else
{
	$stmt = $conn->prepare("delete from user where email = ? ");
	$stmt->bind_param("s",$e_id);
	$stmt->execute();
	echo "deletion done";
	$stmt->close();
	$conn->close();
}

?>