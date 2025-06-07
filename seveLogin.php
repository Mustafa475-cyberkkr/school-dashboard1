<?php
session_start();
include_once("cont.php");


$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE Email='$email' AND Password='$password'";
$qwr = mysqli_query($con, $sql);

if (mysqli_num_rows($qwr) > 0) {
  

    $user = mysqli_fetch_assoc($qwr);
    
$_SESSION['id'] = $user['id'];  
    header("Location:index.php");
   
    exit();
} else {
    $_SESSION['error'] = "البريد أو كلمة المرور غير صحيحة";
    header("Location:login.php");
    exit();
}
?>
