<?php

include_once("nav.php");
include_once("sdaa.php");
include_once("cont.php");
include_once("font.php");
?>
    <div  class="section bg-theme-color-light overlay-dark overlay-opacity-8 bg-cover lazy w-100  " data-loaded="true"  style="background-color:#4e73df ; h-100" >
    			
        <div class="container me-5  mt-5"> 

            <div class="row text-center-md text-center-xs d-middle justify-content-start">
                
                

                <div class="col-12 col-lg-6 text-align-end text-center-md text-center-xs aos-init aos-animate" data-aos="fade-in" data-aos-delay="50" data-aos-offset="0">

                    <div class="d-inline-block bg-white shadow-primary-xs rounded p-4 p-md-5 w-100 max-w-450 text-align-start">
                        
                        <h2 class="h5 mb-5">
                            <i class="fi fi-homeadvisor"></i> 
                            <span class="d-inline-block px-2">اضافه الصف</span>
                        </h2>

                        <form novalidate="" class="bs-validate" method="post" action="seva.php">

                             <div class="form-floating mb-3">
                                <input placeholder="دخل اسم الصف" id="s_address" type="text" value="" class="form-control" name="name">
                                <label for="s_address">اسم الصف</label>
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
                            </div>

                            <div class="form-floating mb-3">
                                <select id="s_rooms" class="form-control" name="stege" title="المرحله التعليميه">
                                    <option value="1">ابتداىي</option>
                                    <option value="2">اعدادي</option>
                                    <option value="3">ثانوي</option>
                                </select>
                                <label for="s_rooms">المرحله التعليميه</label>
                            </div>

                            <div class="row gutters-xs">

                                <div class="col-12 col-lg-6">
                                 
      
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

                                        <label for="s_baths">المعلم المسوال</label>
                                    </div>

                                </div>

                                <div class="col-12 col-lg-6">

                                    <div class="form-floating mb-3">
                                        <input placeholder="Max. Price" id="s_max_price" type="date" value="" name="data" class="form-control">
                                        <label for="s_max_price">ادخل العام الدراسي</label>
                                    </div>

                                </div>

                            </div>

                           

                            <button type="submit" class="btn w-100 btn-lg btn-secondary bg-gradient-danger">
                                <i class="fi fi-search"></i>
                                حفظ البيانات
                            </button>
                        </form>

                    </div>

                </div>

            </div>

        </div>

    </div>
</body>
</html>