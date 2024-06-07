<!doctype html>
<?php
include "header.php"
include "dbcon.php";
?>

<?php
$id=$_GET['id'];
$rs=mysqli_query($con,"select * from customer where CUSTOMER_ID=$id");
$curnadrow=mysqli_fetch_assoc($rs);
$cuid=$curnadrow['CUSTOMER_ID'];
$cuname=$curnadrow['CUSTOMER_NAME'];
$cuemail=$curnadrow['E_MAIL'];
$cupass=$curnadrow['PASSWORD'];
$cumob=$curnadrow['MOBILE_NO'];
$cuadd=$curnadrow['ADDRESS'];
$cupin=$curnadrow['PINCODE'];
$gender=$curnadrow['GENDER'];
$folder=$curnadrow['IMAGE'];
if($_SERVER['REQUEST_METHOD']=="POST")
{
    $cuname=$_POST['cuname'];
    $cuemail=$_POST['cuemail'];
    $cupass=$_POST['cupass'];
    $cumob=$_POST['cumob'];
    $cuadd=$_POST['cuadd'];
    $cupin=$_POST['cupin'];
    $gender =$_POST["gender"];
    

    
    $filename=$_FILES['uploadfile']['name'];
    $tempname=$_FILES['uploadfile']['tmp_name'];
    $folder="images/".$filename;
    move_uploaded_file($tempname,$folder);
    
    if(mysqli_query($con,"update customer set CUSTOMER_NAME='$cuname',E_MAIL='$cuemail',PASSWORD='$cupass',MOBILE_NO='$cumob',ADDRESS='$cuadd',PINCODE='$cupin',GENDER='$gender',IMAGE='$folder' where CUSTOMER_ID='$cuid'"))
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
    <h3 class="page-title"> Updation in Customer Table </h3>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
      </ol>
    </nav>
  </div>
  <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
        <!doctype html>
<html lang=en>
    <head>
        <meta charset="utf-8">
        <title>shopping db</title>
    </head>  
      
      <form class="forms-sample" method="post" enctype="multipart/form-data">
      <input type="hidden" name="cuid" value="<?php echo $cuid;?>">
        
        Enter customer Name:<input type="text" name="cuname" class="form-control" placeholder="customer Name" pattern="[a-zA-Z]{1,}" oninvalid="setCustomValidity('Please enter Alphabets.')" value="<?php echo $cuname;?>" required><br>
        Enter customer email_id:<input type="text" name="cuemail" class="form-control" placeholder="customer email_id" pattern="[a-zA-Z0-9!#$%&'*+\/=?^_`{|}~.-]+@[a-zA-Z0-9-]+(\.[a-zA-Z0-9-]+)*" oninvalid="setCustomValidity('Please enter valid email')" value="<?php echo $cuemail;?>" required><br>
        Enter customer password:<input type="password" name="cupass" class="form-control" placeholder="customer password" value="<?php echo $cupass;?>"required><br>
        Enter customer mobile_no:<input type="number" name="cumob" class="form-control" placeholder="customer mobile_no" value="<?php echo $cumob;?>"required><br>
        Enter customer address:<input type="text" name="cuadd" class="form-control" placeholder="customer address" value="<?php echo $cuadd;?>"required><br>
        Enter customer pincode:<input type="number" name="cupin" class="form-control" placeholder="customer pincode" value="<?php echo $cupin;?>"required><br>
        Enter customer gender:
        <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female" required>Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <br><br>

        Enter Image URL:<input type="file" name="uploadfile" class="form-control" placeholder="URL" value="<?php echo $folder;?>"><br>
  
        
        <button type="submit" class="btn btn-gradient-primary me-2">Update</button>
        </div>
                     
</form>
</div>
</div>
</body>
</html>
<?php
include "footer.php"
?>