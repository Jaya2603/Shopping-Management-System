<!doctype html>
<?php
include "header.php";
include "dbcon.php";
?>
<?php
if($_SERVER['REQUEST_METHOD']=="POST")
{
    $sn=$_POST['sname'];
    $se=$_POST['semail'];
    $smn=$_POST['smn'];
    $sadd=$_POST['sadd'];
    $spc=$_POST['spc'];
    if(mysqli_query($con,"insert into supplier(S_NAME,E_MAIL,MOBILE_NO,ADDRESS,PINCODE) values('$sn','$se','$smn','$sadd','$spc')"))
    {?>
      <div class="col-sm-6 col-md-4 col-lg-3">
      <i class="mdi mdi-checkbox-marked-circle">Data Inserted Successfully</i> 
                        </div>
                        <?php
    }
    else
    { ?>
    <div class="col-sm-6 col-md-4 col-lg-3">
                        <i class="mdi mdi-bell-ring"></i>
                      </div>
                      <?php
        echo "Some error please try again";
    }
}
?>
<div class="main-panel">
<div class="content-wrapper">
  <div class="page-header">
    <h3 class="page-title"> Insertion in Supplier Table </h3>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
      </ol>
    </nav>
  </div>
  <div class="col-lg-10 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
        <!doctype html>
<html lang=en>
    <head>
        <meta charset="utf-8">
        <title>shopping db</title>
    </head>    
<form class="forms-sample"  method="post">
                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label"><b>Name:</b></label>
                        <div class="col-sm-9">
                          <input class="form-control" id="exampleInputUsername2" pattern="[a-zA-Z]{1,}" oninvalid="setCustomValidity('Please enter Alphabets.')"placeholder="Company/Your Name" type="text" name="sname"><br>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label"><b> E-Mail:</b></label>
                        <div class="col-sm-9">
                          <input class="form-control" id="exampleInputUsername2" placeholder="Your E-Mail" type="text" name="semail"><br>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label"><b>Mobile No:</b></label>
                        <div class="col-sm-9">
                          <input class="form-control" id="exampleInputUsername2" placeholder="Mobile No" type="number" name="smn"><br>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label"><b>Address:</b></label>
                        <div class="col-sm-9">
                          <input class="form-control" id="exampleInputUsername2" placeholder="Your Address" type="text" name="sadd"><br>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label"><b>Pincode:</b></label>
                        <div class="col-sm-9">
                          <input class="form-control" id="exampleInputUsername2" placeholder="Your Pincode" type="number" name="spc"><br>
                        </div>
                      </div>
                      
                          <button type="submit" class="btn btn-gradient-primary me-2">Insert</button>
                        </div>
                      </div>
                      </div>
</form>
</div>
</div>
</body>
</html>

<?php
         include "footer.php";
        ?>
       