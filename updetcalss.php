<?php
//صفحه تعديل الفصوال
include_once("cont.php");
$cla_id=$_POST['cla_id'];
$nema_cl=$_POST['nema_cl'];
$teacher=$_POST['teacher'];
$clssroom=$_POST['clssroom'];
$stege=$_POST['stege'];
$s_type=$_POST['s_type'];
$data=$_POST['data'];
$sql="UPDATE `clssas` SET `nema_cl`='$nema_cl',`ssar`='$s_type',`clssroom`='$clssroom'
,`stege`='$stege',`teacher`='$teacher',`data`='$data' WHERE cla_id=$cla_id";
mysqli_query($con ,$sql);
header("location:disblyCalss.php");
?>