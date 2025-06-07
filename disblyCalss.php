<?php
include_once("scc.php");
include_once("nav.php");
include_once("stul.php");
include_once("font.php");
include_once("cont.php");


?>
<body>
    <div class="container py-5 mt-5" style="margin-top: 100px;  margin-left: 100;">
  <h1 class="text-center mb-4 table-title">🌟uعرض البيانات الفصوال الدراسيه 🌟</h1>
  <div class="responsive-table">
    <table class="table">
      <thead>
        <tr>
          <th>id</th>
          <th>اسم الصف</th>
          <th> مقرارت الماده</th>
          <th> الصف الدراسي</th>
          <th>المرحاله النعليميه</th>
           <th>  اسم مدرس الفصل</th>
             <th> التاريخ</th>
           <th> حذف او تعديل</th>
        </tr>
      </thead>
      <tbody>
        <!-- Product 1 -->
         <?php
         $sql="SELECT * FROM `clssas`";
         $qe=mysqli_query($con,$sql);
         while($row=mysqli_fetch_array($qe)){
?>
        <tr>
          <td> <?php  echo $row['cla_id']; ?></td>
          <td>
          <h3> <?php echo $row['nema_cl']; ?></h3>
          </td>
          <td><?php   echo $row['ssar']; ?></td>
           <td><?php   echo $row['clssroom']; ?></td>
            <td><?php   echo $row['stege'];?></td>
              <td><?php   echo $row['teacher']; ?></td>
              <td><?php   echo $row['data']; ?></td>
          <td>
          <a href="deletclass.php?cla_id=<?php echo $row['cla_id'];?>"><button type="submit" class=" btn btn-danger">حذف الماده</button></a>
            <!-- اول ما يتم النقر على الزر راح تفتح النافذه-->
          <button type="button" class="btn btn-primary m-3" 
          data-toggle="modal" data-target="#modal<?php echo $row['cla_id']; ?>">
    تعديل
</button>




   <!--  اكواد النافذه حق التعديل -->
<div class="modal fade" id="modal<?php echo $row['cla_id']; ?>" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    
      <div class="modal-header bg-primary">
        <h5 class="modal-title">تعديل بيانات الطالب</h5>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <form action="updetcalss.php" method="POST">
        <div class="modal-body">
          <!-- نخزن ID في حقل مخفي -->
          <input type="hidden" name="cla_id" value="<?php echo $row['cla_id']; ?>">

          <!-- مثلًا: اسم الطالب -->
          <div class="form-group">
            <label>اسم الطالب</label>
            <input type="text" name="nema_cl" class="form-control" value="<?php echo $row['nema_cl']; ?>">
            
          </div>
            <label for="">سم مدرس الفصل</label>
                 <div class="form-floating mb-3">
                
                                        <select id="s_baths" class="form-control" title="uiuiy4"  name="teacher">
                                                <?php  
         $sql="SELECT * FROM `teatchr`";
         $rew=mysqli_query($con,$sql);
      
         while($rows=mysqli_fetch_array($rew)){ 
       ?>
                                            <option value="<?php echo $rows['nema_s'] ?>" selected=""><?php echo $rows['nema_s'] ; ?></option>
                                            <?php  } ?>
                                        </select>

           
<br>
          
      <div class="form-floating mb-3">
                                <select required="" id="s_location" class="form-control" data-live-search="true" name="clssroom" title="الصف الدراسي">
                                    <option value="الصف الاول">الصف الاول</option>
                                    <option value="لصف الثاني">الصف الثاني </option>
                                    <option value="لصف الثالث">الصف الثالث</option>
                                    <option value="لصف الرابع">الصف الرابع</option>
                                    <option value="لصف الخمس">الصف الخمس</option>
                                    <option value="الصف السادس">الصف السادس</option>
                                    <option value="الصف الثامن ">الصف الثامن </option>
                                    <option value="الصف التاسع">الصف التاسع</option>
                                    <option value="لصف الاوال ثانوي">الصف الاوال ثانوي</option>
                                    <option value="لصف   الثاني الا ثانوي">الصف   الثاني الا ثانوي</option>
                                </select>
                                <label for="s_location">الصف الدراسي</label>
          
            
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
                            
                                    <div class="form-floating mb-3">
                                        <input placeholder="Max. Price" id="s_max_price" type="date" value="" name="data" class="form-control">
                                        <label for="s_max_price">ادخل العام الدراسي</label>
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
          <?php  }?>
        </tbody>
    </table>
    


 
   

  </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
