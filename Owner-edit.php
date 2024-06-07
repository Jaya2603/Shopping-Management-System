<!doctype html>
<?php
include "header.php";
include "dbcon.php";
?>
<?php
$id=$_GET['id'];
$rs=mysqli_query($con,"select * from owner where owner_id=$id");
$ornadrow=mysqli_fetch_assoc($rs);
$oid=$ornadrow['OWNER_ID'];
$oname=$ornadrow['OWNER_NAME'];
$omn=$ornadrow['MOBILE_NO'];
$opass=$ornadrow['PASSWORD'];
if($_SERVER['REQUEST_METHOD']=="POST")
{
    $oname=$_POST['oname'];
    $omn=$_POST['omn'];
    $opass=$_POST['opass'];
    if(mysqli_query($con,"update owner set OWNER_NAME='$oname',MOBILE_NO='$omn',PASSWORD='$opass' where OWNER_ID=$id"))
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
    <h3 class="page-title"> Updation in Owner Table </h3>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
      </ol>
    </nav>
  </div>
  <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
        <!doctype html>
<html lang=en>
    <head>
        <meta charset="utf-8">
        <title>shopping db</title>
    </head>    
<form class="forms-sample"  method="post">
                      
          <label for="exampleInputUsername2" class="col-sm-3 col-form-label"><b>Enter Name:</b></label>
          <input class="form-control"  placeholder="Owner Name" type="text" name="oname" value="<?php echo $oname;?>" required><br>
          <label for="exampleInputUsername2" class="col-sm-3 col-form-label"><b>Mobile No:</b></label>
          <input class="form-control"  placeholder="Mobile No" type="number" name="omn" value="<?php echo $omn;?>" required><br>
          <label for="exampleInputUsername2" class="col-sm-3 col-form-label"><b>Password:</b></label>
          <input class="form-control"  placeholder="Password" type="text" name="opass" value="<?php echo $opass;?>" required><br>
          <button type="submit" class="btn btn-gradient-primary me-2">Update</button>
                       
</form>
</div>
</div>
</body>
</html>
<?php
include "footer.php"
?>