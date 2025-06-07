<?php
//صفخه حفظ البيانات المواد
include_once("cont.php");
$name=$_POST['name'];
$s_type=$_POST['s_type'];
$clssroom=$_POST['clssroom'];
$stege=$_POST['stege'];
$teacher=$_POST['teacher'];
$sql="INSERT INTO `ccdr`( `nema_d`, `tetcher`, `clssroom`, `stege`, `gdr`) 
VALUES ('$name','$teacher','$clssroom','$stege','$s_type')";
mysqli_query($con,$sql);
header("location:addcccr.php");


?>