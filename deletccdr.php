<?php
include_once("cont.php");
@$id=$_GET['id'];
$sql="DELETE FROM `ccdr` WHERE id=$id";
mysqli_query($con,$sql);
header("location:dibluysccdr.php");
?>