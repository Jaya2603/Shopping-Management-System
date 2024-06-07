<!DOCTYPE html>
<?php
include "header.php";
include "dbcon.php";
?>
<?php
$id=$_GET['id'];
$rs=mysqli_query($con,"select * from invoice_product_detail where ivpd_id=$id");
$row=mysqli_fetch_assoc($rs);
$ivpdid=$row['IVPD_ID'];
$iid=$row['I_ID'];
$sid=$row['SALES_ID'];
$qut=$row['QUANTITY'];
$rate=$row['RATE']; 
if($_SERVER['REQUEST_METHOD']=="POST")
{
   
    $iid=$_POST['iid'];
    $sid=$_POST['sid'];
    $qut=$_POST['qut'];
    $rate=$_POST['rate'];
    if(mysqli_query($con,"update invoice_product_detail set I_ID='$iid',SALES_ID='$sid',QUANTITY='$qut',RATE='$rate' where IVPD_ID='$id' "))
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
  <div class="col-lg-9 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                  <h4 class="card-title text-primary">UPDATION IN INVOICE PRODUCT DETAIL</h4>
                  <form method="post" class="forms-sample">
                  Select Invoice Id:
        <select name="iid" class="form-control" >
        <?php
            $rs=mysqli_query($con,"select * from invoice");
            while($row=mysqli_fetch_assoc($rs))
            {
          ?> 
              <option value="<?php echo $row['I_ID'];?>"><?php echo $row['I_ID'];?></option>
                  <?php
            }
            
            ?>
        </select>
        <br>
        Select Sales id:
        <select name="sid" class="form-control">
        <?php
            $rs=mysqli_query($con,"select * from sales_order");
            while($row=mysqli_fetch_assoc($rs))
            {
          ?> 
              <option value="<?php echo $row['SALES_ID'];?>"><?php echo $row['SALES_ID'];?></option>
                  <?php
            }
            
            ?>
        </select>
        <br>
        Enter Quantity:<input type="number" name="qut" class="form-control" placeholder="Quantity" value="<?php echo $qut;?>"><br>
        Enter Rate:<input type="number" name="rate" class="form-control" placeholder="Rate" value="<?php echo $rate;?>"><br>
        <button type="submit" class="btn btn-gradient-primary me-2">Update</button> 
    </form> 
              <br>
                    
                  </div>
                </div>
              </div>
  <?php
         include "footer.php";
        ?>