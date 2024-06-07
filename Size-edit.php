<!doctype html>
<?php
include "header.php";
include "dbcon.php";
?>
<?php
$id=$_GET['id'];
$rs=mysqli_query($con,"select * from size where size_id=$id");
$srnadrow=mysqli_fetch_assoc($rs);
$sid=$srnadrow['SIZE_ID'];
$sname=$srnadrow['SIZE'];
if($_SERVER['REQUEST_METHOD']=="POST")
{
    $sname=$_POST['sname'];
    
    if(mysqli_query($con,"update size set SIZE='$sname' where SIZE_ID=$sid"))
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
    <h3 class="page-title"> Updation in Size Table </h3>
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
    <input type="hidden" name="sid" value="<?php echo $sid;?>">
    Enter Size Name:<input type="text" pattern="[a-zA-Z]{1,}" oninvalid="setCustomValidity('Please enter Alphabets.')"name="sname" class="form-control" placeholder="Size Name" value="<?php echo $sname;?>" required><br>                    
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