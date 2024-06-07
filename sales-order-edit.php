<!doctype html>
<?php
include "header.php";
include "dbcon.php";
?>
<?php
$id=$_GET['id'];
$rs=mysqli_query($con,"select * from sales_order_detail where SALES_DETAIL_ID=$id");
$row=mysqli_fetch_assoc($rs);
$sdi=$row['SALES_DETAIL_ID'];
$soid=$row['SALES_ID'];
$prdid=$row['PD_ID'];
$quty=$row['QUANTITY'];
$rate=$row['RATE'];
if($_SERVER['REQUEST_METHOD']=="POST")
{
    $soid=$_POST['soid'];
    $prdid=$_POST['prdid'];
    $quty=$_POST['quty'];
    $rate=$_POST['rate'];
    if(mysqli_query($con,"update sales_order_detail set SALES_ID='$soid',PD_ID='$prdid',QUANTITY='$quty',RATE='$rate' where SALES_DETAIL_ID='$sdi'"))
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
    <h3 class="page-title"> Updation in sales order details </h3>
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
        <form class="forms-sample" method="post">
        
        
        Enter sales id
        <select name="soid" class="form-control">
        <?php
            $rs=mysqli_query($con,"select * from sales_order");
            while($row=mysqli_fetch_assoc($rs))
            {
          ?> 
              <option value="<?php echo $row['SALES_ID'];?>"><?php echo $row['CUSTOMER_ID'];?></option>
                  <?php
            }
            
            ?>
        </select>
        <br>
        Enter product detail id:
        <select name="prdid" class="form-control">
        <?php
            $rs=mysqli_query($con,"select * from product_details");
            while($row=mysqli_fetch_assoc($rs))
            {
          ?> 
              <option value="<?php echo $row['PD_ID'];?>"><?php echo $row['P_ID'];?></option>
                  <?php
            }
            
            ?>
        </select>
        <br>
        <label for="exampleInputUsername2" class="col-sm-3 col-form-label"><b>Enter quantity</b></label>
        <input class="form-control"  placeholder="Enter quantity" type="number" name="quty" value="<?php echo $quty;?>"><br>
        <label for="exampleInputUsername2" class="col-sm-3 col-form-label"><b>Enter Rate</b></label>
        <input class="form-control"  placeholder=" Enter Rate" type="number" name="rate" value="<?php echo $rate;?>"><br>
        <button type="submit" class="btn btn-gradient-primary me-2">Update</button><br>   
        </form>
        </div>
        </div>
        </body>
</html>
<?php
   include "footer.php";
?>