<?php
//صفخه حفظ البيانات الطلاب
include_once("cont.php");
$name=$_POST['name'];
$numbe=$_POST['numbet_name'];
$sex=$_POST['sex'];
$emil=$_POST['emil'];
$phon=$_POST['phon'];
$phnnfrst=$_POST['numper_fvar'];
$calss=$_POST['calss'];
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
            // تخزين الاسم في قاعدة البيانات
            $stmt =$con->prepare("INSERT INTO `studint`( `nema`, `st_number`, `sex`, `gamil`, `phon`, `paren_name`, `class_name`, `img`) VALUES 
            (?,?,?,?,?,?,?,?)");
            $stmt->bind_param("ssssssss",$name,$numbe,$sex,$emil,$phon,$phnnfrst,$calss,$newName);
            $stmt->execute();        
            header("location:inde.php");
            if($stmt->execute()){
                   
                 header("location:inde.php");

            }
            else{
                echo "خطاء    ".$stmt->error;
            }
       
   
?>

?>