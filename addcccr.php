<?php
include_once("font.php");
include_once("sdaa.php");
include_once("nav.php");
include_once("stul.php");
include_once("cont.php");

?>
    <div dir="rtl" class="section bg-theme-color-light overlay-dark overlay-opacity-8 bg-cover lazy w-100 " data-loaded="true"   style="background-color:#4e73df ; h-100">
    			
        <div class="container me-5 "> 

            <div class="row text-center-md text-center-xs d-middle justify-content-start">
                
                

                <div class="col-12 col-lg-6 text-align-end text-center-md text-center-xs aos-init aos-animate" data-aos="fade-in" data-aos-delay="50" data-aos-offset="0">

                    <div class="d-inline-block bg-white shadow-primary-xs rounded p-4 p-md-5 w-100 max-w-450 text-align-start">
                        
                        <h2 class="h5 mb-5">
                            <i class="fi fi-homeadvisor"></i> 
                            <span class="d-inline-block px-2">صفحه اضافه المواد</span>
                        </h2>

                        <form novalidate="" class="bs-validate" method="post" action="seveccdr.php">

                             <div class="form-floating mb-3">
                                <input placeholder="دخل اسم الماده" id="s_address" type="text" value="" class="form-control validate-input" name="name">
                                <small style="color: red; display: none;"> ادخل البيانات</small>
                                <label for="s_address">ادخل اسم الماده</label>
                            </div>

                            <div class="clearfix mb-3">
                                <label class="form-radio form-radio-secondary ">
                                    <input type="radio" name="s_type" value="مقرار" checked="">
                                    <i></i> مقرار
                                </label>

                                <label class="form-radio form-radio-secondary ml-3">
                                    <input type="radio" name="s_type" value="اساسيه">
                                    <i></i> اساسيه
                                </label>
                            </div>

                            <div class="form-floating mb-3">
                                <select required="" id="s_location" class="form-control validate-input" data-live-search="true" name="clssroom" title="الصف الدراسي">
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
                                <select id="s_rooms" class="form-control validate-input" name="stege" title="المرحله التعليميه">
                                    <option value="1">ابتداىي</option>
                                    <option value="2">اعدادي</option>
                                    <option value="3">ثانوي</option>
                                </select>
                                <label for="s_rooms">المرحله التعليميه</label>
                            </div>

                            <div class="row gutters-xs">

                                <div class="col-12 col-lg-6">
                                 
      
                                    <div class="form-floating mb-3">
                                        <select id="s_baths" class="form-control validate-input" title="uiuiy4"  name="teacher">
                                                <?php  
         $sql="SELECT * FROM `teatchr`";
         $rew=mysqli_query($con,$sql);
      
         while($rows=mysqli_fetch_array($rew)){ 
       ?>
                                            <option value="<?php echo $rows['nema_s'] ?>" selected=""><?php echo $rows['nema_s'] ; ?></option>
                                            <?php  } ?>
                                            <small style="color: red; display: none;"> نكم</small>
                                        </select>

                                        <label for="s_baths">المعلم المسوال</label>
         </div>
                                </div>
                            </div>
                            <button type="submit" class="btn w-100 btn-lg btn-danger bg-gradient-danger">
                                <i class="fi fi-search"></i>
                                حفظ البيانات
                            </button>
                        </form>

                    </div>

                </div>

            </div>

        </div>

    </div>




    
       <script>
  const form = document.querySelector("form");
  const fields = document.querySelectorAll(".validate-input");

  // عند الضغط على زر التسجيل
  form.addEventListener("submit", function (e) {
    e.preventDefault(); // إيقاف الإرسال مؤقتًا

    let valid = true;

    fields.forEach(function (field) {
      const error = field.nextElementSibling;

      if (field.value.trim() === "") {
        error.style.display = "block";
        valid = false;
      } else {
        error.style.display = "none";
      }
    });

    if (valid) {
      this.submit(); // لو كله تمام أرسل النموذج
    }
  });

  // عند الكتابة في الحقول
  fields.forEach(function (field) {
    field.addEventListener("input", function () {
      const error = this.nextElementSibling;
      if (this.value.trim() !== "") {
        error.style.display = "none";
      }
    });
  });
</body>
</html>