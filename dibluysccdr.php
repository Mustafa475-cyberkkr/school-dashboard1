<?php

include_once("scc.php");
include_once("nav.php");
include_once("stul.php");
include_once("font.php");
include_once("cont.php");

?>
<body>
    <div class="container py-5 mt-5" style="margin-top: 100px;  margin-left: 100;">
  <h1 class="text-center mb-4 table-title">🌟uعرض البيانات المواد الدراسيه 🌟</h1>
  <div class="responsive-table">
    <table class="table">
      <thead>
        <tr>
          <th>id</th>
          <th>اسم الماده</th>
          <th>مدارس الماده</th>
          <th> الصف الدراسي</th>
          <th>المرحاله النعليميه</th>
           <th> مقرارت الماده</th>
           <th> حذف او تعديل</th>
        </tr>
      </thead>
      <tbody>
        <!-- Product 1 -->
         <?php
         $sql="SELECT * FROM `ccdr`";
         $qe=mysqli_query($con,$sql);
         while($row=mysqli_fetch_array($qe)){
?>
        <tr>
          <td> <?php  echo $row['id']; ?></td>
          <td>
          <h3> <?php echo $row['nema_d']; ?></h3>
          </td>
          <td><?php   echo $row['tetcher'] ?></td>
           <td><?php   echo $row['clssroom'] ?></td>
            <td><?php   echo $row['stege'] ?></td>
              <td><?php   echo $row['gdr'] ?></td>
          <td>
          <button type="button" class=" btn btn-danger" 
          data-toggle="modal" data-target="#modal1">
    حذف الماده
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

      <form action="updetccdr.php" method="POST">
        <div class="modal-body">
          <!-- نخزن ID في حقل مخفي -->
          <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

          <!-- مثلًا: اسم الطالب -->
          <div class="form-group">
            <label>اسم الطالب</label>
            <input type="text" name="name" class="form-control" value="<?php echo $row['nema_d']; ?>">
          </div>

            <div class="form-group">
            <label>	مدارس الماده</label>
            <input type="text" name="tetcher" class="form-control" value="<?php echo $row['tetcher']; ?>">
          </div>

           

             <div class="form-floating mb-3">
                                <select required="" id="s_location" class="form-control" data-live-search="true" name="clssroom" title="الصف الدراسي">
     <option value="<?php echo $row['clssroom']; ?>" selected=""><?php echo $row['clssroom'] ; ?></option>
<?php  
         $sqlr="SELECT * FROM `clssas`";
         $reew=mysqli_query($con,$sqlr);
      
         while($rowss=mysqli_fetch_array($reew)){ 
                                  ?>
                                 <option value="<?php echo $rowss['nema_cl'] ?>" selected=""><?php echo $rowss['nema_cl'] ; ?></option>
                                            <?php  } ?>
                                    </select>
                                <label for="s_location">الصف الدراسي</label>
                            </div>

          
            
                            <div class="form-floating mb-3">
                                <select id="s_rooms" class="form-control" name="stege" title="المرحله التعليميه">
                                    <option value="ابتداىي">ابتداىي</option>
                                    <option value="اعدادي">اعدادي</option>
                                    <option value="ثانوي">ثانوي</option>
                                </select>
                                <label for="s_rooms">المرحله التعليميه</label>
                            </div>
             <div class="clearfix mb-3">
                                <label class="form-radio form-radio-secondary">
                                    <input type="radio" name="s_type" value="مقرار" checked="">
                                    <i></i> مقرار
                                </label>

                                <label class="form-radio form-radio-secondary ml-3">
                                    <input type="radio" name="s_type" value="اساسيه">
                                    <i></i> اساسيه
                                </label>
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
 

          </td>
        </tr>
      <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">هل تريد حذف الماده ?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">سوف يتم هذف هذه الماده ب مجرد الضغط على "خذف"</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">الغاء</button>
                    <a type="submit" class=" btn btn-danger" href="deletccdr.php?id=<?php echo $row['id'];?>">حذف الماده</a>
                </div>
            </div>
        </div>
    </div>
          <?php  }?>
        </tbody>
    </table>
    


 
   

  </div>
</div>

    
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
