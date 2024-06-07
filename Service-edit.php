<!DOCTYPE html>
<?php
include "header.php";
include "dbcon.php";
?>
<?php
$id=$_GET['id'];
$rs=mysqli_query($con,"select * from service where SERVICE_ID=$id");
$sernadrow=mysqli_fetch_assoc($rs);
$seid=$sernadrow['SERVICE_ID'];
$sename=$sernadrow['S_NAME'];
$serate=$sernadrow['RATE'];
if($_SERVER['REQUEST_METHOD']=="POST")
{
    $sename=$_POST['sename'];
    $serate=$_POST['serate'];
    if(mysqli_query($con,"update SERVICE set S_NAME='$sename',RATE='$serate' where SERVICE_ID=$seid"))
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
    <h3 class="page-title"> Updation in Service Table </h3>
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
            <input type="hidden" name="seid" value="<?php echo $seid;?>">
            Enter SERVICE Name:<input type="text" name="sename" class="form-control"pattern="[a-zA-Z]{1,}" oninvalid="setCustomValidity('Please enter Alphabets.')" placeholder="SERVICE Name" value="<?php echo $sename;?>" required><br>
            Enter SERVICE Rate:<input type="text" name="serate" class="form-control" placeholder="SERVICE Rate" value="<?php echo $serate;?>"><br>
            <button type="submit" class="btn btn-gradient-primary me-2">Update</button> 
<br>   
        </form>
    </body>
</html>
<?php
include "footer.php";
?>