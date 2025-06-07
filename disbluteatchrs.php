<?php
include_once("scc.php");
include_once("nav.php");
include_once("stul.php");
include_once("font.php");
include_once("cont.php");

?>
<body>
    <div class="container py-5 mt-5" style="margin-top: 100px;  margin-left: 100;">
  <h1 class="text-center mb-4 table-title">🌟uعرض البيانات المعلموان  🌟</h1>
  <div class="responsive-table">
    <table class="table">
      <thead>
        <tr>
          <th>id</th>
          <th>اسم المعلم</th>
          <th> البريد الكتروني</th>
          <th>  الرقم</th>
          <th> الاراتب</th>
           <th>  العنوان</th>
            <th>  التخصص</th>
             <th> الجنس </th>
             <th>  العمر</th>
            
           <th> حذف او تعديل</th>
        </tr>
      </thead>
      <tbody>
        <!-- Product 1 -->
         <?php
         $sql="SELECT * FROM `teatchr`";
         $qe=mysqli_query($con,$sql);
         while($row=mysqli_fetch_array($qe)){
?>
        <tr>
          <td> <?php  echo $row['id']; ?></td>
          <td>
          <h3> <?php echo $row['nema_s']; ?></h3>
          </td>
          <td><?php   echo $row['emil'] ?></td>
           <td><?php   echo $row['phon'] ?></td>
            <td><?php   echo $row['salary'] ?></td>
             <td><?php   echo $row['address'] ?></td>
              <td><?php   echo $row['spq'] ?></td>
              <td><?php   echo $row['sex'] ?></td>
               <td><?php   echo $row['ega'] ?></td>
          <td>
           <button type="button" class=" btn btn-danger" 
          data-toggle="modal" data-target="#modal1">
    حذف المعلم
</button>
            <!-- اول ما يتم النقر على الزر راح تفتح النافذه-->
          <button type="button" class="btn btn-primary m-3" 
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

      <form action="updetteatchrs.php" method="POST">
        <div class="modal-body">
          <!-- نخزن ID في حقل مخفي -->
          <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

          <!-- مثلًا: اسم الطالب -->
          <div class="form-group">
            <label>اسم المعلم</label>
            <input type="text" name="nema_s" class="form-control" value="<?php echo $row['nema_s']; ?>">
          </div>

            <div class="form-group">
            <label>	 البريد الكتروني</label>
            <input type="text" name="emil" class="form-control" value="<?php echo $row['emil']; ?>">
          </div>

           <div class="form-group">
            <label>	 الرقم</label>
            <input type="text" name="phon" class="form-control" value="<?php echo $row['phon']; ?>">
          </div>

              <div class="form-group">
            <label>	 الاراتب</label>
            <input type="text" name="salary" class="form-control" value="<?php echo $row['salary']; ?>">
          </div>

             <div class="form-group">
            <label>	 العنوان</label>
            <input type="text" name="address" class="form-control" value="<?php echo $row['address']; ?>">
          </div>

             <div class="form-group">
            <label>	 التخصص</label>
            <input type="text" name="spq" class="form-control" value="<?php echo $row['spq']; ?>">
          </div>

             <div class="form-group">
            <label>	 الجنس</label>
            <input type="text" name="sex" class="form-control" value="<?php echo $row['sex']; ?>">
          </div>

           <div class="form-group">
            <label>	 العمر</label>
            <input type="text" name="ega" class="form-control" value="<?php echo $row['ega']; ?>">
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
                    <h5 class="modal-title" id="exampleModalLabel">هل تريد حذف المعلم ?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">سوف يتم هذف هذه المعلم ب مجرد الضغط على "خذف"</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">الغاء</button>
                    <a type="submit" class=" btn btn-danger" href="deletteatchrs.php?id=<?php echo $row['id'];?>">حذف المعلم</a>
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
