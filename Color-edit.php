<!DOCTYPE html>
<?php
include "header.php";
include "dbcon.php";
?>
<?php
$id=$_GET['id'];
$rs=mysqli_query($con,"select * from color where color_id=$id");
$cornadrow=mysqli_fetch_assoc($rs);
$coid=$cornadrow['COLOR_ID'];
$coname=$cornadrow['COLOR_NAME'];
$cdname=$cornadrow['COLOR_CODE'];
if($_SERVER['REQUEST_METHOD']=="POST")
{
    $coname=$_POST['coname'];
    $cdname=$_POST['cdname'];
    if(mysqli_query($con,"update color set COLOR_NAME='$coname',COLOR_CODE='$cdname' where COLOR_ID=$coid"))
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
    <h3 class="page-title"> Updation in Color Table </h3>
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
        <form method="post" class="forms-sample">
            <input type="hidden" name="coid" value="<?php echo $coid;?>">
            Enter Color Name:<input type="text" name="coname" class="form-control" placeholder="Color Name" value="<?php echo $coname;?>" required><br>
            Enter Color Code:<input type="color" name="cdname" class="form-control" placeholder="Color Code" value="<?php echo $cdname;?>" required><br>
            <button type="submit" class="btn btn-gradient-primary me-2">Update</button> 
<br>   
        </form>
    </body>
</html>
<?php
include "footer.php";
?>