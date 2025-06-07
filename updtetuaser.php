<?php

include_once("cont.php");
$id=$_POST['id'];
$FullNam=$_POST['FullNam'];
$NameWithInitials=$_POST['NameWithInitials'];
$Address=$_POST['Address'];
$Email=$_POST['Email'];
$Gender=$_POST['Gender'];
$Phone_Number=$_POST['Phone_Number'];
$Username=$_POST['Username'];
$Password=$_POST['Password'];
$sql="UPDATE `users` SET `Full Name`='$FullNam',`Name_With_Initials`='$NameWithInitials',`Address`='$Address',`Gender`='$Gender'
,`Email`='$Email',`Phone Number`='$Phone_Number',`Username`='$Username',`Password`='$Password' WHERE id='$id'";
mysqli_query($con,$sql);
header("location:Profile.php");
?>