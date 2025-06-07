<?php
include_once("cont.php");
include_once("stul.php");
include_once("nav.php");
include_once("font.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="stule.css">
 
    <title>موقع اضافه الطلاب </title>
</head >
<body dir="">
    <div class="container card-0 justify-content-center ">
        <div class="card-body px-sm-4 px-0">
            <div class="row justify-content-center mb-5">
                <div class="col-md-10 col"><h3 class="font-weight-bold ml-md-0 mx-auto text-center text-sm-left"> اضافه الطلاب  </h3><p class="mt-md-4  ml-md-0 ml-2 text-center text-sm-left">
                     قم بادخال معلومات الطلاب بدقه ليتم تسجيلة في النظام الاكاديمي واسناه الى الصف و التفصل المناسب .</p></div>
            </div>
            <div class="row justify-content-center round">
                <div class="col-lg-10 col-md-12 ">
                    <div class="card shadow-lg card-1">
                        <form action="seve.php" method="post" enctype="multipart/form-data">
                        <div class="card-body inner-card">
                            <div class="row justify-content-center">
                                <div class="col-lg-5 col-md-6 col-sm-12">
                                 
                                    <div class="form-group"><label for="first-name">ادخال رقم الاكاديمي  الطالب</label><input type="text" class="form-control" id="first-name" placeholder="الايتكرار "  name="numbet_name"> </div>
                                    <div class="form-group"> <label for="Mobile-Number">رقام الطالب</label> <input type="text" class="form-control" id="Mobile-Number" placeholder=""  name="phon"> </div>

                                    <div class="form-group"> <label for="inputEmail4">الصف الدراسي</label> <select class="form-control" name="calss">
                                    <?php
                                    
                                    $sql="SELECT * FROM `clssas`";
                                    $pql=mysqli_query($con,$sql);
                                    while ($ros=mysqli_fetch_array($pql)) {
                                       
                                    
                                    ?>
                                    <option value="<?php echo $ros['nema_cl']; ?>"><?php echo $ros['nema_cl']; ?></option>
                                <?php  }?></select> </div>

                                    <div class="form-group"> <label for="time">رقم ولاي الامر</label> <input type="text" class="form-control" id="time" placeholder="" name="numper_fvar">  </div>
                                   
                                </div>
                                <div class="col-lg-5 col-md-6 col-sm-12">
                                    <div class="form-group"> <label for="last-name">ادخال اسم الطالب </label> <input type="text" class="form-control" id="last-name" placeholder="الاسم كامل "  name="name"> </div>
                                    <div class="form-group"> <label for="phone">ادخال البريد الالكترواني</label>  <input type="email" class="form-control" id="email" placeholder="" name="emil"> </div>
                                     <div class="form-group"> <label for="inputEmail4">ادخال نواع الطالب</label> <select class="form-control" name="sex"><option value="ذاكر">ذاكر </option><option value="انثى">انثى</option> </select> </div>
                                   

                                   
                                </div>
                            </div>

                            <div class="row justify-content-center">
                                <div class="col-md-12 col-lg-10 col-12"> <div class="form-group files"><label class="my-auto">صوراه الطالب</label> <input id="file" type="file" class="form-control" name="img"/></div></div>
                            </div>
                            <div class="row justify-content-center">
                               
                                    <div class="row justify-content-end mb-5">
                                       <button type="submit" class="btn btn-primary btn-block">حفط المعلومات</button>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        </form>   
                    </div>
                </div>
            </div>
        </div>
    </div>



     <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="java.js"></script>

</body>
</html>