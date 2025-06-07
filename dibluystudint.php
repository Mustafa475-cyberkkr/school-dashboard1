<?php
include_once("scc.php");
include_once("nav.php");
include_once("stul.php");
include_once("font.php");
include_once("cont.php");


?>
<body>
    <div class="container py-5 mt-5" style="margin-top: 100px;  margin-left: 100;">
  <h1 class="text-center mb-4 table-title">🌟uعرض البيانات الطلاب المسجلون  🌟</h1>
  <div class="responsive-table">
    <table class="table">
      <thead>
        <tr>
          <th>id</th>
          <th>اسم الطالب</th>
          <th>  الرقم الاكاديمي</th>
          <th> الجنس</th>
          <th> البريد الالكترواني</th>
           <th>  الرقم</th>
            <th>  رقم ولي امر الطالب</th>
             <th> الصف </th>
             <th>  صوراه</th>
            
           <th> حذف او تعديل</th>
        </tr>
      </thead>
      <tbody>
        <!-- Product 1 -->
         <?php
         $sql="SELECT * FROM `studint`";
         $qe=mysqli_query($con,$sql);
         while($row=mysqli_fetch_array($qe)){
?>
        <tr>
          <td> <?php  echo $row['id']; ?></td>
          <td>
          <h3> <?php echo $row['nema']; ?></h3>
          </td>
          <td><?php   echo $row['st_number'] ?></td>
           <td><?php   echo $row['sex'] ?></td>
            <td><?php   echo $row['gamil'] ?></td>
             <td><?php   echo $row['phon'] ?></td>
              <td><?php   echo $row['paren_name'] ?></td>
              <td><?php   echo $row['class_name'] ?></td>
               <td> <img src="../add studint/img/<?php   echo $row['img']; ?>" alt=""  style="width: 60px; height: 60px;" class="rounded mr-2"></td>
               
          <td>
            <button type="button" class=" btn btn-danger  m-2" 
          data-toggle="modal" data-target="#modal1">
    حذف الطالب
</button>
            <!-- اول ما يتم النقر على الزر راح تفتح النافذه-->
          <button type="button" class="btn btn-primary" 
          data-toggle="modal" data-target="#modal<?php echo $row['id']; ?>">
    تعديل
</button>




   <!--  اكواد النافذه حق التعديل -->
<div class="modal fade" id="modal<?php echo $row['id']; ?>" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    
      <div class="modal-header bg-primary">
        <h5 class="modal-title">تعديل بيانات الطالب</h5>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <form action="updetstudint.php" method="POST" enctype="multipart/form-data">
        <div class="modal-body">
          <!-- نخزن ID في حقل مخفي -->
          <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

          <!-- مثلًا: اسم الطالب -->
          <div class="form-group">
            <label>اسم الطالب</label>
            <input type="text" name="nema" class="form-control" value="<?php echo $row['nema']; ?>">
          </div>

            <div class="form-group">
            <label>	  الرق الاكاديمي</label>
            <input type="text" name="st_number" class="form-control" value="<?php echo $row['st_number']; ?>">
          </div>

           <div class="form-group">
            <label>	 الجنس</label>
            <input type="text" name="sex" class="form-control" value="<?php echo $row['sex']; ?>" >
          </div>

              <div class="form-group">
            <label>	 البريد الالكترواني</label>
            <input type="text" name="gamil" class="form-control" value="<?php echo $row['gamil']; ?>">
          </div>

             <div class="form-group">
            <label>	 رقم الهاتف</label>
            <input type="text" name="phon" class="form-control" value="<?php echo $row['phon']; ?>">
          </div>

             <div class="form-group">
            <label>	 رقم ولي امر الطالب</label>
            <input type="text" name="paren_name" class="form-control" value="<?php echo $row['paren_name']; ?>">
          </div>

             <div class="form-group">
            <label>	 الفصل الدراسي</label>
            <input type="text" name="class_name" class="form-control" value="<?php echo $row['class_name']; ?>">
          </div>

           <div class="form-group">
            <label>	 الصوره</label>
            <img src="../add studint/img/<?php   echo $row['img']; ?>" alt=""  style="width: 60px; height: 90px;" class="rounded mr-2">
            <input type="file" name="img" class="form-control" >
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


<div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">هل تريد حذف الطالب ?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">سوف يتم هذف هذه الطالب ب مجرد الضغط على "خذف"</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">الغاء</button>
                    <a type="submit" class=" btn btn-danger" href="deletstudint.php?id=<?php echo $row['id'];?>">حذف الطالب</a>
                </div>
            </div>
        </div>

          </td>
        </tr>
          <?php  }?>
        </tbody>
    </table>
    


 
   

  </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
