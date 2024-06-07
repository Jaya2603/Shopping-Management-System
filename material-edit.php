<!doctype html>
<?php
include "header.php";
include "dbcon.php";
?>
<?php
$id=$_GET['id'];
$rs=mysqli_query($con,"select * from material where material_id=$id");
$mrnadrow=mysqli_fetch_assoc($rs);
$mid=$mrnadrow['MATERIAL_ID'];
$mname=$mrnadrow['MATERIAL_NAME'];
if($_SERVER['REQUEST_METHOD']=="POST")
{
    $mname=$_POST['mname'];
    
    if(mysqli_query($con,"update material set MATERIAL_NAME='$mname' where MATERIAL_ID=$mid"))
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
    <h3 class="page-title"> Updation in Material Table </h3>
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
<form class="forms-sample"  method="post">
    <input type="hidden" name="mid" value="<?php echo $mid;?>">
    Enter Material Name:<input type="text" name="mname" class="form-control"pattern="[a-zA-Z]{1,}" oninvalid="setCustomValidity('Please enter Alphabets.')" placeholder="Material Name" value="<?php echo $mname;?>" required><br>                   
                          <button type="submit" class="btn btn-gradient-primary me-2">Update</button>
                        </div>
                      </div>
                      </div>
</form>
</div>
</div>
</body>
</html>
<?php
include "footer.php"
?>