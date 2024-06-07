<!DOCTYPE html>
<?php
include "header.php"
include "dbcon.php"
?>
<?php
$id=$_GET['id'];
$rs=mysqli_query($con,"select * from brand where brand_id=$id");
$brnadrow=mysqli_fetch_assoc($rs);
$bid=$brnadrow['BRAND_ID'];
$bname=$brnadrow['BRAND_NAME'];
if($_SERVER['REQUEST_METHOD']=="POST")
{
    $bname=$_POST['bname'];
    $bid=$_POST['bid'];
    if(mysqli_query($con,"update brand set BRAND_NAME='$bname' where BRAND_ID=$bid"))
    { ?>
      <div class="col-sm-6 col-md-4 col-lg-3">
      <i class="mdi mdi-checkbox-marked-circle">Updated Successfully</i> 
                        </div>
                        <?php
    }
    else
    { ?>
      <div class="col-sm-6 col-md-4 col-lg-3">
                          <i class="mdi mdi-bell-ring">Some error</i>
                        </div>
                        <?php
    }
}
?>
     
<div class="main-panel">
<div class="content-wrapper">
  <div class="page-header">
    <h3 class="page-title"> Updation in Brand Table </h3>
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
            <input type="hidden" name="bid" value="<?php echo $bid;?>">
            Enter Brand Name:<input type="text"pattern="[a-zA-Z]{1,}" oninvalid="setCustomValidity('Please enter Alphabets.')" name="bname" class="form-control" placeholder="Brand Name" value="<?php echo $bname;?>" required><br>
        <button type="submit" class="btn btn-gradient-primary me-2">Update</button> 
        </form>
        </div>
</div>
    </body>
</html>
<?php
include "footer.php";
?>

