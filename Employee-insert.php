<!doctype html>
<?php
include "header.php";
include "dbcon.php";
?>
<?php
if($_SERVER['REQUEST_METHOD']=="POST")
{
   
  $en=$_POST['ename'];
  $ee=$_POST['eemail'];
  $ep=$_POST['epass'];
  $emn=$_POST['emn'];
  $eadd=$_POST['eadd'];
  $epc=$_POST['epc'];
  $epost=$_POST['epost'];
  $target="images/". basename($_FILES['epic']['name']);
  move_uploaded_file($_FILES['epic']['tmp_name'],$target);
    //echo "insert into product (P_NAME,CATEGORY_ID,TYPE_ID,BRAND_ID,MATERIAL_ID,IMAGE_URL,STYLE,DES) values('$pname','$pcat','$ptype','$pbrand','$pmat','$target','$pst','$pdes')";
    if(mysqli_query($con,"insert into employee (E_NAME,E_MAIL,PASSWORD,MOBILE_NO,ADDRESS,PINCODE,POST,IMAGE) values('$en','$ee','$ep','$emn','$eadd','$epc','$epost','$target')"))
    {?>
      <div class="col-sm-6 col-md-4 col-lg-3">
      <i class="mdi mdi-checkbox-marked-circle">Data Inserted Successfully</i> 
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
    <h3 class="page-title"> Insertion in Employee Table </h3>
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
        <form method="post" enctype="multipart/form-data">
        Enter Name:<input type="text" name="ename" class="form-control" placeholder="Your Name" pattern="[a-zA-Z]{1,}" oninvalid="setCustomValidity('Please enter Alphabets.')"
    onchange="try{setCustomValidity('')}catch(e){}"  required><br>
        Enter E-Mail:<input type="text" name="eemail" class="form-control" placeholder="Your E-Mail"pattern="[a-zA-Z0-9!#$%&'*+\/=?^_`{|}~.-]+@[a-zA-Z0-9-]+(\.[a-zA-Z0-9-]+)*" oninvalid="setCustomValidity('Please enter valid email')" required><br>
        Enter Password:<input type="text" name="epass" class="form-control" placeholder="Select Strong Password" required><br>
        Enter Mobile No:<input type="number" name="emn" class="form-control" placeholder="Mobile No" required><br>
        Enter Address:<input type="text" name="eadd" class="form-control" placeholder="Your Address" required><br>
        Enter Pincode:<input type="number" name="epc" class="form-control" placeholder="Your Pincode" required><br>
        Enter Post:<input type="text" name="epost" class="form-control" placeholder="Your Post" required><br>
        Select Image:<input type="file" name="epic" class="form-control" placeholder="URL" required><br>
        <button type="submit" class="btn btn-gradient-primary me-2">Insert</button><br>   
        </form>
        </div>
</div>
</body>
</html>

<?php
         include "footer.php";
        ?>
        
        