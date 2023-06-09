<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Register</title>

  <!-- Custom fonts for this template-->
  <link href="Dashboard/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="Dashboard/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block"style="background-image: url(Dashboard/Images/background_02.jpg); background-repeat: no-repeat; background-size: cover; background-position: center;"></div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
              </div>
              <form class="user" method="post">
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" name="uname" class="form-control form-control-user" id="exampleFirstName" placeholder="User Name">
                  </div>
                  
                </div>
                <div class="form-group">
                  <input type="email" name="uemail" class="form-control form-control-user" id="exampleInputEmail" placeholder="Email Address">
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" name="upass" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                  </div>
                  <div class="col-sm-6">
                    <input type="number" name="unum" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Number">
                  </div>

                  <div class="col-sm-6">
                    <input type="text" name="unic" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="User NIC">
                  </div>

                  <div class="col-sm-6">
                    <input type="text" name="ufloor" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Floor">
                  </div>

                  <div class="col-sm-6">
                    <input type="text" name="uflat" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Flat">
                  </div>

                </div>
                <input type="submit" name="ureg" class="btn btn-primary btn-user btn-block">
                <hr>
                <a href="index.php" class="btn btn-google btn-user btn-block">
                  <i class="fab fa-google fa-fw"></i> Register with Google
                </a>
                <a href="index.php" class="btn btn-facebook btn-user btn-block">
                  <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                </a>
              </form>
              <hr>
              <div class="text-center">
                <a class="small" href="forgotpassword.php">Forgot Password?</a>
              </div>
              <div class="text-center">
                <a class="small" href="user_login.php">Already have an account? Login!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="Dashboard/vendor/jquery/jquery.min.js"></script>
  <script src="Dashboard/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="Dashboard/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="Dashboard/js/sb-admin-2.min.js"></script>

</body>

</html>
<?php
require_once('Dashboard/connection.php');
if(isset($_POST['ureg']))
{
    $name = $_POST['uname'];
    $uemail = $_POST['uemail'];
    $unum = $_POST['unum'];
    $nic = $_POST['unic'];
    $ufloor = $_POST['ufloor'];
    $uflat = $_POST['uflat'];
    $upass = $_POST['upass'];
    

    $sql1 = mysqli_query($con,"INSERT into userregis(UName,UEmail,Enumber	,ENic,Floor,Flat,UPassword) values ('$name','$uemail','$unum','$nic','$ufloor','$uflat','$upass')");

    if($sql1)
    {
       
        header('location:user_login.php');
    }
}
?>