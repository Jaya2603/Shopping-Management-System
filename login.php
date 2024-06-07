<!DOCTYPE html>

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>D.N Master Login</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/logo.png" />
  </head>
  <body>
  
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth">
              <div class="row flex-grow">
                  <div class="col-lg-4 mx-auto">
                      <div class="auth-form-light text-left p-5">
                        
                        <div class="brand-logo">
                            <img src="assets/images/d.png">
                        </div>
                        <h4>Hello! let's get started</h4>
                <h6 class="font-weight-light">Sign in to continue!</h6>
                <form class="pt-3" method="post">
                  <div class="form-group">
                    <input type="number" name="mno" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Username[Mobile No.]">
                  </div>
                  <div class="form-group">
                    <input type="password" name="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div class="mt-3">
                    <input type="submit" class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn" value="SIGN IN">
                  </div>
                  </form>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <?php
    
    if($_SERVER['REQUEST_METHOD']=="POST")
    {
        $mno=$_POST['mno'];
        $pwd=$_POST['password'];
        $con=mysqli_connect("localhost","root","","shopping");
        $rs=mysqli_query($con,"select * from owner where mobile_no='$mno' and password='$pwd'");
        echo "select * from owner where mobile_no='$mno' and password='$pwd'";
        $row=mysqli_fetch_assoc($rs);
        session_start();
        $_SESSION['admin']=$row['OWNER_ID'];
        //echo "created";
        header("location: home.php"); 
      
      }
    ?>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <!-- endinject -->
  </body>
</html>