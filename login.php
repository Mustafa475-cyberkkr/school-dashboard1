



<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Login</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                    </div>
                                    <form action="seveLogin.php" method="post" class="user">
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control form-control-user validate-input"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Enter Email Address...">
                                                  <small style="color: red; display: none;"> enter ther Email Address</small>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control form-control-user validate-input"
                                                id="exampleInputPassword" placeholder="Password">
                                                  <small style="color: red; display: none;"> enter ther Password</small>
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox"  class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember
                                                    Me</label>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            Login
                                        </button>
                                        <hr>
                                        <a href="index.html" class="btn btn-google btn-user btn-block">
                                            <i class="fab fa-google fa-fw"></i> Login with Google
                                        </a>
                                        <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                            <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                                        </a>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="forgot-password.html">Forgot Password?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="register.html">Create an Account!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>


<?php

if (isset($_SESSION['error'])) {
    echo '
    <div id="errorBox" style="
        background-color: red;
        padding: 10px;
        color: white;
        text-align: center;
        font-weight: bold;
        position: fixed;
        top: 20px;
        left: 50%;
        transform: translateX(-50%);
        z-index: 9999;
        border-radius: 6px;
        box-shadow: 0 2px 8px rgba(0,0,0,0.3);
    ">
        ' . $_SESSION['error'] . '
    </div>
    <script>
        setTimeout(() => {
            let box = document.getElementById("errorBox");
            if(box) box.style.display = "none";
        }, 3000);
    </script>
    ';
    unset($_SESSION['error']);
}
?>




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

</script>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>