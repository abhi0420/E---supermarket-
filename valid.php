<?php 

session_start();

$conn = mysqli_connect('localhost','root','');
mysqli_select_db($conn, 'registration');

$email = $_POST['email'];
$pass = $_POST['password'];

$s = " select * from user where email = '$email' && password = '$pass'" ;

$result = mysqli_query($conn, $s);

$num = mysqli_num_rows($result);

if($num == 1)
{
$_SESSION['email'] = $email;
    while($row = $result->fetch_assoc()) {
$_SESSION['username'] = $row["name"];
$_SESSION['address']=$row["address"];
$_SESSION['pin']=$row["pin"];
$_SESSION['phone']=$row["phone"];
    }

header('location:home.php')	;


}
else{
echo '<script>
alert("Username or password incorrect!");
window.location.href="login.php";
</script>'; ;
}



?>