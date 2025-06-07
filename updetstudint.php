<?php
include_once("cont.php");
$id=$_POST['id'];
$name=$_POST['name'];
$st_number=$_POST['st_number'];
$sex=$_POST['sex'];
$gamil=$_POST['gamil'];
$phon=$_POST['phon'];
$paren_name=$_POST['paren_name'];
$class_name=$_POST['class_name'];
$imgName = $_FILES['img']['name'];
$imgTmp = $_FILES['img']['tmp_name'];
$imgSize = $_FILES['img']['size'];

    // استخراج الامتداد والتأكد أنه صورة
    $ext = strtolower(pathinfo($imgName, PATHINFO_EXTENSION));
    $allowed = ['jpg', 'jpeg', 'png', 'gif'];

   
        $newName = uniqid("img_", true) . '.' . $ext;
        $path = "img/" . $newName;

        // نقل الصورة للمجلد
        move_uploaded_file($imgTmp, $path);
        $sql="UPDATE `studint` SET `nema`='$name',`st_number`='$st_number',`sex`='$sex',`gamil`='$gamil',`phon`='$phon'
        ,`paren_name`='$paren_name',`class_name`='$class_name',`img`='$newName' WHERE id=$id";
mysqli_query($con ,$sql);
header("location:dibluystudint.php");
?>