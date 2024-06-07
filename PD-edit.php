<!doctype html>
<?php
include "header.php";
include "dbcon.php";
?>
<?php
$id=$_GET['id'];
$rs=mysqli_query($con,"select * from product_details where PD_ID=$id");
$pdrnadrow=mysqli_fetch_assoc($rs);
$pdid=$pdrnadrow['PD_ID'];
//$esn=$esnadrow['E_NAME'];
$pdname=$pdrnadrow['P_ID'];
$pdsize=$pdrnadrow['SIZE_ID'];
$pdcolor=$pdrnadrow['COLOR_ID'];
$pdrp=$pdrnadrow['REGULAR_PRICE'];
$pdop=$pdrnadrow['OFFER_PRICE'];
if($_SERVER['REQUEST_METHOD']=="POST")
{
  $pdname=$_POST['pdname'];
  $pdsize=$_POST['pdsize'];
  $pdcolor=$_POST['pdcolor'];
  $pdrp=$_POST['pdrp'];
  $pdop=$_POST['pdop'];
    //echo "update employee_schedule set SALES_ID='$ess',SERVICE_ID='$esse',PURPOSE='$espur',DATE_TIME='$esdandt',STATUS='$esst' where E_ID=$id";
    if(mysqli_query($con,"update product_details set P_ID='$pdname',SIZE_ID=$pdsize,COLOR_ID=$pdcolor,REGULAR_PRICE='$pdrp',OFFER_PRICE='$pdop' where PD_ID=$id"))
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
    <h3 class="page-title"> Updation in Product_Details Table </h3>
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
    <form class="forms-sample" method="post" >
        <input type="hidden" name="pdid" value="<?php echo $pdid;?>">
        Select Product Name:
        <select name="pdname" class="form-control">
        <?php
            $rs=mysqli_query($con,"select * from Product");
            while($row=mysqli_fetch_assoc($rs))
            {
          ?> 
              <option value="<?php echo $row['P_ID'];?>"><?php echo $row['P_NAME'];?></option>
                  <?php
            }
            
            ?>
        </select>
        <br>
        Select Size:
        <select name="pdsize" class="form-control" >
        <option value=NULL>--DON'T SELECT IT IF YOU WANT NULL--</option>
        <?php
            $rs=mysqli_query($con,"select * from Size");
            while($row=mysqli_fetch_assoc($rs))
            {
          ?> 
              <option value="<?php echo $row['SIZE_ID'];?>"><?php echo $row['SIZE'];?></option>
                  <?php
            }
            
            ?>
        </select>
        <br>
        Select Color:
        <select name="pdcolor" class="form-control" >
        <?php
            $rs=mysqli_query($con,"select * from Color");
            while($row=mysqli_fetch_assoc($rs))
            {
          ?> 
              <option value="<?php echo $row['COLOR_ID'];?>"><?php echo $row['COLOR_NAME'];?></option>
                  <?php
            }
            
            ?>
        </select>
        <br>
        Enter Regular Price:<input type="number" name="pdrp" class="form-control" placeholder="Regular Price" value="<?php echo $pdrp;?>"><br>
        Enter Offer Price:<input type="number" name="pdop" class="form-control" placholder="Offer Price" value="<?php echo $pdop;?>"><br>      
        <button type="submit" class="btn btn-gradient-primary me-2">Update</button>
                      
</form>
</div>
</div>
</body>
</html>

<?php
include "footer.php"
?>
