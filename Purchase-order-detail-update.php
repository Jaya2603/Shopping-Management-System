<!doctype html>
<?php
include "header.php";
include "dbcon.php";
?>
<?php
$id=$_GET['id'];
$rs=mysqli_query($con,"select * from purchase_order_detail where POD_ID=$id");
$row=mysqli_fetch_assoc($rs);
$podid=$row['POD_ID'];
$purid=$row['PURCHASE_ID'];
$pdid=$row['PD_ID'];
$qut=$row['QUANTITY'];
$rate=$row['RATE']; 
if($_SERVER['REQUEST_METHOD']=="POST")
{
   
  $purid=$_POST['purid'];
  $pdid=$_POST['pdid'];
  $qut=$_POST['qut'];
  $rate=$_POST['rate'];
   //echo "update purchase_order_detail set PURCHASE_ID='$purid',PD_ID='$pdid',QUANTITY='$qut',RATE='$rate' where POD_ID=$id";
    if(mysqli_query($con,"update purchase_order_detail set PURCHASE_ID='$purid',PD_ID='$pdid',QUANTITY='$qut',RATE='$rate' where POD_ID=$id"))
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
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
      </ol>
    </nav>
  </div>
  <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                  <h4 class="card-title text-primary">UPDATION IN PURCHASE ORDER DETAIL</h4>
                  <form method="post" class="forms-sample">
                  Select Purchase ID:
        <select name="purid" class="form-control" >
        <?php
            $rs=mysqli_query($con,"select * from purchase_order");
            while($row=mysqli_fetch_assoc($rs))
            {
          ?> 
              <option value="<?php echo $row['PURCHASE_ID'];?>"><?php echo $row['PURCHASE_ID'];?></option>
                  <?php
            }
            
            ?>
        </select>
        Select Product Detail ID:
        <select name="pdid" class="form-control" >
        <?php
            $rs=mysqli_query($con,"select * from product_details");
            while($row=mysqli_fetch_assoc($rs))
            {
          ?> 
              <option value="<?php echo $row['PD_ID'];?>"><?php echo $row['PD_ID'];?></option>
                  <?php
            }
            
            ?>
        </select>
        <br>
        Enter Quantity:<input type="number" name="qut" class="form-control" placeholder="Quantity"  value="<?php echo $qut;?>"><br>
        Enter Rate:<input type="number" name="rate" class="form-control" placeholder="Rate"  value="<?php echo $rate;?>"><br>

              
                    <button type="submit" class="btn btn-gradient-primary me-2">Update</button>
                    </form> 
                  </div>
                </div>
              </div>
  <?php
         include "footer.php";
        ?>