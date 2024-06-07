<!doctype html>
<?php
include "header.php";
include "dbcon.php";
?>
<?php
$id=$_GET['id'];
$rs=mysqli_query($con,"select * from category where category_id=$id");
$crnadrow=mysqli_fetch_assoc($rs);
$cid=$crnadrow['CATEGORY_ID'];
$cname=$crnadrow['CATEGORY_NAME'];
if($_SERVER['REQUEST_METHOD']=="POST")
{
    $cname=$_POST['cname'];    
    if(mysqli_query($con,"update category set CATEGORY_NAME='$cname' where CATEGORY_ID=$cid"))
    {?>
        <div class="col-sm-7 col-md-4 col-lg-3">
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
        echo "Some error";
    }
}
?>
<div class="main-panel">
<div class="content-wrapper">
  <div class="page-header">
    <h3 class="page-title"> Updation in Category Table </h3>
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
            <input type="hidden" name="cid" value="<?php echo $cid;?>">
            Enter Category Name:<input type="text"pattern="[a-zA-Z]{1,}" oninvalid="setCustomValidity('Please enter Alphabets.')" name="cname" class="form-control" placeholder="Category Name" value="<?php echo $cname;?>"required><br>
            
            <button type="submit" class="btn btn-gradient-primary me-2">Update</button>   
        </form>
        </div>
</div>
    </body>
</html>
<?php
include "footer.php";
?>