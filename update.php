<?php 

session_start();


$conn = mysqli_connect('localhost','root','');
mysqli_select_db($conn, 'registration');

$email = $_SESSION['email'] ;

$name = $_POST['user'];
$address = $_POST['address'];
$pin = $_POST['pin'];
$phone = $_POST['phone'];

$update = "UPDATE user SET name = '$name', address = '$address', pin = '$pin', phone = '$phone'  where email = '$email' ";
if(mysqli_query($conn, $update)){
    echo "Records were updated successfully.";
    echo '<script>

window.location.href="account2.php";
</script>'; ;
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}





?>