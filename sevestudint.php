<?php  
//صفخه حفظ البيانات المعلمين
include_once("cont.php");
@$name=$_POST['name'];
@$emil=$_POST['emil'];
@$phon=$_POST['number'];
@$salary=$_POST['salary'];
@$address=$_POST['address'];
@$specin=$_POST['specin'];
@$ega=$_POST['ega'];
@$ret=$_POST['ret'];
$sql="INSERT INTO `teatchr`( `nema_s`, `emil`, `phon`, `salary`, `address`, `spq`, `sex`, `ega`)
 VALUES ('$name','$emil','$phon','$salary','$address','$specin','$ret','$ega')";
$qur=mysqli_query($con,$sql);

header("location:addte.php");



?>