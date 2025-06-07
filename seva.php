<?php
//صفخه حفظ البيانات الصفواف
include_once("cont.php");
$name=$_POST['name'];
$s_type=$_POST['s_type'];
$clssroom=$_POST['clssroom'];
$stege=$_POST['stege'];
$teacher=$_POST['teacher'];
$data=$_POST['data'];
$sql="INSERT INTO `clssas`(`nema_cl`, `ssar`, `clssroom`, `stege`, `teacher`, `data`)
 VALUES ('$name','$s_type','$clssroom','$stege','$teacher','$data')";
 mysqli_query($con,$sql);
header("location:addclass.php");

