<!DOCTYPE html>
<?php
include "header.php";
include "dbcon.php";
?>
<?php
$id=$_GET['id'];
$rs=mysqli_query($con,"select * from supplier where s_id=$id");
$surnadrow=mysqli_fetch_assoc($rs);
$suid=$surnadrow['S_ID'];
$suname=$surnadrow['S_NAME'];
$suemail=$surnadrow['E_MAIL'];
$sumob=$surnadrow['MOBILE_NO'];
$suadd=$surnadrow['ADDRESS'];
$supin=$surnadrow['PINCODE'];

if($_SERVER['REQUEST_METHOD']=="POST")
{
    $suname=$_POST['suname'];
    $suemail=$_POST['suemail'];
    $sumob=$_POST['sumob'];
    $suadd=$_POST['suadd'];
    $supin=$_POST['supin'];
    
    if(mysqli_query($con,"update supplier set S_NAME='$suname',E_MAIL='$suemail',MOBILE_NO='$sumob',ADDRESS='$suadd',PINCODE='$supin' where S_ID=$suid"))
    {?>
        <div class="col-sm-6 col-md-4 col-lg-3">
        <i class="mdi mdi-checkbox-marked-circle">Updated Successfully</i> 
                          </div>
                          <?php
    }
    else
    {?>
        <div class="col-sm-6 col-md-4 col-lg-3">
                            <i class="mdi mdi-bell-ring">Some error please try again</i>
                          </div>
                          <?php
      }

}
?>
 <div class="main-panel">
<div class="content-wrapper">
  <div class="page-header">
    <h3 class="page-title"> Updation in supplier Table </h3>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
      </ol>
    </nav>
  </div>
  <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                  <html lang=en>
    <head>
        <meta charset="utf-8">
        <title>shopping db</title>
    </head>
    <body>
        <form method="post">
            <input type="hidden" name="suid" class="form-control" placeholder="Product Name" value="<?php echo $suid;?>">
        Enter supplier Name:<input type="text" name="suname" class="form-control"pattern="[a-zA-Z]{1,}" oninvalid="setCustomValidity('Please enter Alphabets.')" placeholder="Product Name"  value="<?php echo $suname;?>"><br>
        Enter Email_ID:<input type="email" name="suemail" class="form-control" placeholder="Product Name" value="<?php echo $suemail;?>"><br>
        Enter Mobile no:<input type="number" name="sumob" class="form-control" placeholder="Product Name" value="<?php echo $sumob;?>"><br>
        Enter Address:<input type="varchar" name="suadd" class="form-control" placeholder="Product Name" value="<?php echo $suadd;?>"><br>
        Enter Pincode:<input type="number" name="supin" class="form-control" placeholder="Product Name" value="<?php echo $supin;?>"><br>
        <button type="submit" class="btn btn-gradient-primary me-2">Update</button>   
        </form>
    </body>
</html>
