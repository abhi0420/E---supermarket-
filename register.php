<?php 

session_start();


$conn = mysqli_connect('localhost','root','');
mysqli_select_db($conn, 'registration');

$name = $_POST['user'];
$email = $_POST['email'];
$address = $_POST['address'];
$pin = $_POST['pin'];
$phone = $_POST['phone'];
$pass = $_POST['password'];

$s = " select * from user where email = '$email'" ;

$result = mysqli_query($conn, $s);

$num = mysqli_num_rows($result);

if($num == 1)
{
	echo "username already taken";
echo '<script>
alert("User already exists!");
window.location.href="login.php";
</script>';


}
else{
	$reg = " insert into user(name,email, address,pin ,phone ,password) values ('$name','$email','$address','$pin','$phone','$pass')" ;
	mysqli_query($conn,$reg);
	echo "registration sucessful";
}

?>