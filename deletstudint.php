<?php
include_once("cont.php");
@$id=$_GET['id'];
$sql="DELETE FROM `studint` WHERE id=$id";
mysqli_query($con,$sql);
header("location:dibluystudint.php");
?>