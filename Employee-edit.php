<!doctype html>
<?php
include "header.php";
include "dbcon.php";
?>
<?php
$id=$_GET['id'];
$rs=mysqli_query($con,"select * from employee where E_ID=$id");
$ernadrow=mysqli_fetch_assoc($rs);
$eid=$ernadrow['E_ID'];
$ename=$ernadrow['E_NAME'];
$eemail=$ernadrow['E_MAIL'];
$epass=$ernadrow['PASSWORD'];
$emob=$ernadrow['MOBILE_NO'];
$eadd=$ernadrow['ADDRESS'];
$epin=$ernadrow['PINCODE'];
$epost=$ernadrow['POST'];
$folder=$ernadrow['IMAGE'];
if($_SERVER['REQUEST_METHOD']=="POST")
{
    $ename=$_POST['ename'];
    $eemail=$_POST['eemail'];
    $epass=$_POST['epass'];
    $emob=$_POST['emob'];
    $eadd=$_POST['eadd'];
    $epin=$_POST['epin'];
    $epost=$_POST['epost'];
    $filename=$_FILES['uploadfile']['name'];
    $tempname=$_FILES['uploadfile']['tmp_name'];
    $folder="images/".$filename;
    move_uploaded_file($tempname,$folder);
   
    if(mysqli_query($con,"update employee set E_NAME='$ename',E_MAIL='$eemail',PASSWORD='$epass',MOBILE_NO='$emob',ADDRESS='$eadd',PINCODE='$epin',POST='$epost',IMAGE='$folder' where E_ID=$eid"))
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
    <h3 class="page-title"> Updation in Employee Table </h3>
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
    <form class="forms-sample" method="post" enctype="multipart/form-data">
        <input type="hidden" name="eid" value="<?php echo $eid;?>">

            Enter Employee Name:<input type="text" name="ename" class="form-control" placeholder="Employee Name"pattern="[a-zA-Z]{1,}" oninvalid="setCustomValidity('Please enter Alphabets.')"  value="<?php echo $ename;?>"required><br>
            Enter Employee email_id:<input type="text" name="eemail" class="form-control" placeholder="Employee email_id" pattern="[a-zA-Z0-9!#$%&'*+\/=?^_`{|}~.-]+@[a-zA-Z0-9-]+(\.[a-zA-Z0-9-]+)*" oninvalid="setCustomValidity('Please enter valid email')" value="<?php echo $eemail;?>"required><br>
            Enter Employee password:<input type="password" name="epass" class="form-control" placeholder="Employee password" value="<?php echo $epass;?>"required><br>
            Enter Employee mobile_no:<input type="number" name="emob" class="form-control" placeholder="Employee mobile_no" value="<?php echo $emob;?>"required><br>
            Enter Employee address:<input type="text" name="eadd" class="form-control" placeholder="Employee address" value="<?php echo $eadd;?>"required><br>
            Enter Employee pincode:<input type="number" name="epin" class="form-control" placeholder="Employee pincode" value="<?php echo $epin;?>"required><br>
            Enter Employee Post:<input type="text" name="epost" class="form-control" placeholder="Employee Post" value="<?php echo $epost;?>"required><br>
            Select Image:<input type="file" name="uploadfile" class="form-control" placeholder="URL" value="<?php echo $folder;?>"required><br>

                        <button type="submit" class="btn btn-gradient-primary me-2">Update</button>
                      
</form>
</div>
</div>
</body>
</html>

<?php
include "footer.php"
?>
