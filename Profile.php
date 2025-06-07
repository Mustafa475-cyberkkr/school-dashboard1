
<?php
session_start();
$id=$_SESSION['id'];
include_once("nav.php");
include_once("stul.php");
include_once("font.php");
include_once("cont.php");
$sql="SELECT * FROM `users` WHERE `id`='$id'";
$qer=mysqli_query($con,$sql);
 $user = mysqli_fetch_assoc($qer);
?>


<!DOCTYPE html>
<html lang="ar" >
<head>
  <meta charset="UTF-8">
  <title>ملف المستخدم</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .profile-box {
      max-width: 800px;
      margin: 50px auto;
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 0 15px rgba(0,0,0,0.1);
      padding: 30px;
    }

    .profile-header {
      background-color: #00bcd4;
      color: white;
      padding: 15px;
      border-radius: 8px 8px 0 0;
      font-weight: bold;
    }

    .profile-img {
      width: 120px;
      height: 120px;
      border-radius: 50%;
      object-fit: cover;
      border: 4px solid #00bcd4;
      margin-bottom: 20px;
    }

    .edit-btn {
      position: absolute;
      bottom: 20px;
      left: 20px;
    }
  </style>
</head>
<body style="background-color: #f3f5f7;">

<div class="profile-box text-center position-relative">
  <div class="profile-header">Ingenious Developer1</div>
  <img src="img/undraw_profile_1.svg" alt="user" class="profile-img">
  <table class="table table-bordered text-right">
    <tr><th>Full Name</th><td> <?php  echo $user['Full Name'] ?> </td></tr>
    <tr><th>Name With Initials</th><td><?php  echo $user['Name_With_Initials'] ?></td></tr>
    <tr><th>Address</th><td><?php  echo $user['Address'] ?></td></tr>
    <tr><th>Gender</th><td><?php  echo $user['Gender'] ?></td></tr>
    <tr><th>Email</th><td><?php  echo $user['Email'] ?></td></tr>
    <tr><th>Phone Number</th><td><?php  echo $user['Phone Number'] ?></td></tr>
    <tr><th>Username</th><td><?php  echo $user['Username'] ?></td></tr>
    <tr><th>Password</th><td><?php  echo $user['Password'] ?></td></tr>
      <div class="alert alert-info mt-2">💡 ملاحظة: يتم أخذ البريد الإلكتروني من اسم المستخدم.</div>
  <button class="btn btn-warning edit-btn" type="submit" data-toggle="modal" data-target="#modal">
    <i class="fa fa-edit"></i> تعديل
  </button>
  
   <!--  اكواد النافذه حق التعديل -->
<div class="modal fade" id="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    
      <div class="modal-header bg-primary">
        <h5 class="modal-title">تعديل بيانات المشراف</h5>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <form action="updtetuaser.php" method="POST" >
        <div class="modal-body">
          <!-- نخزن ID في حقل مخفي -->
          <input type="hidden" name="id" value="<?php echo $user['id']; ?>">

          <!-- مثلًا: اسم الطالب -->
          <div class="form-group">
            <label> Full Nam</label>
            <input type="text" name="FullNam" class="form-control" value="<?php  echo $user['Full Name'] ?>">
          </div>

            <div class="form-group">
            <label>	Name With Initials</label>
            <input type="text" name="NameWithInitials" class="form-control" value="<?php echo $user['Name_With_Initials']  ?>">
          </div>

           <div class="form-group">
            <label>	 Address</label>
            <input type="text" name="Address" class="form-control" value="<?php echo $user['Address']; ?>" >
          </div>

              <div class="form-group">
            <label>Email	</label>
            <input type="text" name="Email" class="form-control" value="<?php echo  $user['Email'] ?>">
          </div>

             <div class="form-group">
            <label>	 Gender </label>
            <input type="text" name="Gender" class="form-control" value="<?php echo $user['Gender'] ; ?>">
          </div>

             <div class="form-group">
            <label>	  Phone Number  </label>
            <input type="text" name="Phone_Number" class="form-control" value="<?php echo $user['Phone Number']; ?>">
          </div>

             <div class="form-group">
            <label>	 Username</label>
            <input type="text" name="Username" class="form-control" value="<?php echo $user['Username']; ?>">
          </div>

             <div class="form-group">
            <label>	Password</label>
            <input type="text" name="Password" class="form-control" value="<?php echo $user['Password']; ?>">
          </div>
          
            
          <!-- باقي الحقول حسب قاعدتك -->
        </div>

        <div class="modal-footer">
          <button type="submit" class="btn btn-success">حفظ التعديلات</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">إغلاق</button>
        </div>
      </form>

    </div>
  </div>
</div>
 
  </table>

</div>


</body>
</html>
