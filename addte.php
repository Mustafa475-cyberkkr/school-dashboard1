
<?php
include_once("stul.php");
include_once("nav.php");

include_once("font.php");


?>

<body >
      
        <div class="container ">
        <form action="sevestudint.php" method="post">
          <div class="row gutters ms-5 ps-5 btrd w-100 mt-5">

         
          <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
          <div class="card h-100">
            <div class="card-body">
              <div class="row gutters">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                  <h6 class="mb-2 text-primary">ادخل البيانات المعلم</h6>
                </div>
            
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                  <div class="form-group">
                    <label for="fullName">الاسم </label>
                    <input type="text" class="form-control" id="fullName" placeholder="Enter full name" name="name">
                  </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                  <div class="form-group">
                    <label for="eMail">البريد الكتروني</label>
                    <input type="email" class="form-control" id="eMail" placeholder="Enter email ID" name="emil">
                  </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                  <div class="form-group">
                    <label for="phone">الرقم</label>
                    <input type="text" class="form-control" id="phone" placeholder="Enter phone number" name="number">
                  </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                  <div class="form-group">
                    <label for="website">الاراتب</label>
                    <input type="number" class="form-control" id="website" placeholder="Website url" name="salary">
                  </div>
                </div>
              </div>
              <div class="row gutters">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                  <h6 class="mt-3 mb-2 text-primary"> العنوان</h6>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                  <div class="form-group">
                    <label for="Street">العنوان</label>
                    <input type="text" class="form-control" id="Street" placeholder="Enter Street" name="address">
                  </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                  <div class="form-group">
                    <label for="ciTy">التخصص</label>
                    <input type="name" class="form-control" id="ciTy" placeholder="Enter City" name="specin">
                  </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                  <div class="form-group">
                    <label for="sTate"> العمر</label>
                    <input type="number" class="form-control" id="sTate"  placeholder="ادخل التاريخ" name="ega" >
                  </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 mt-4">
                  <div class="form-group">
                    <label for="" class="form-label"> الجنس</label>
                    <br>
                    <label for="zIp">ذكر</label>
                <input type="radio" name="ret" value="ذكر">
               
                    <label for="zIp"  >انثى</label>
                <input type="radio" name="ret" value="انثى">
                  </div>
                </div>
              </div>
              <div class="row gutters">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                  <div class="text-right">
                    <button type="submit" id="submit" name="submit" class="btn btn-secondary p-2">حفظ البيانات</button>
                
                  
                  </div>
                </div>
              </div>
            </form>
            </div>
          </div>
          </div>
          </div>
          </div>
          </form>
</div>
</body>
        