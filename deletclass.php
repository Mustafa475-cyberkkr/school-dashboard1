<?php
include_once("cont.php");
@$id=$_GET['cla_id'];
$sql="DELETE FROM `clssas` WHERE cla_id=$id";
mysqli_query($con,$sql);
header("location:disblyCalss.php");
?>