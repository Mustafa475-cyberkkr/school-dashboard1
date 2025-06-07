<?php
include_once("cont.php");
$id=$_POST['id'];
$name=$_POST['name'];
$clssroom=$_POST['clssroom'];
$tetcher=$_POST['tetcher'];
$stege=$_POST['stege'];
$s_type=$_POST['s_type'];

$sql="UPDATE `ccdr` SET `nema_d`='$name',`tetcher`='$tetcher'
,`clssroom`='$clssroom',`stege`='$stege',`gdr`='$s_type' WHERE `id`=$id";
mysqli_query($con ,$sql);
header("location:dibluysccdr.php");
?>