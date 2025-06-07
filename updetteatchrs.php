<?php
//صفحه تعديل المدرسين
include_once("cont.php");
$id=$_POST['id'];
$nema_s=$_POST['nema_s'];
$emil=$_POST['emil'];
$phon=$_POST['phon'];
$salary=$_POST['salary'];
$address=$_POST['address'];
$spq=$_POST['spq'];
$sex=$_POST['sex'];
$ega=$_POST['ega'];

$sql="UPDATE `teatchr` SET `nema_s`='$nema_s',`emil`='$emil',`phon`='$phon'
,`salary`='$salary',`address`='$address',`spq`='$spq',`sex`='$sex',`ega`='$ega' WHERE id=$id";
mysqli_query($con ,$sql);
header("location:disbluteatchrs.php");
?>