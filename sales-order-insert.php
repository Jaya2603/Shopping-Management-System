<!doctype html>
<?php
include "header.php";
include "dbcon.php";
?>
<?php
if($_SERVER['REQUEST_METHOD']=="POST")
{
    $soid=$_POST['sid'];
    $prdid=$_POST['pdid'];
    $qut=$_POST['quty'];
    $rate=$_POST['rat'];
    if(mysqli_query($con,"insert into sales_order_detail (SALES_ID,PD_ID,QUANTITY,RATE) values ('$soid','$prdid','$qut','$rate')"))
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
    <h3 class="page-title"> Insertion in sales-order-detail </h3>
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
        <form method="post" enctype="multipart/form-data">
        Select sales id:
        <select name="sid" class="form-control" >
        <?php
            $rs=mysqli_query($con,"select * from sales_order");
            while($row=mysqli_fetch_assoc($rs))
            {
          ?> 
              <option value="<?php echo $row['SALES_ID'];?>">
              <?php echo $row['CUSTOMER_ID'];?>
              
                  <?php
            }
            
            ?>
        </select>
        <br>
        Select product detail id:
        <select name="pdid" class="form-control">
        <?php
            $rs=mysqli_query($con,"select * from product_details");
            while($row=mysqli_fetch_assoc($rs))
            {
          ?> 
              <option value="<?php echo $row['PD_ID'];?>">
              <?php echo $row['P_ID'];?></option>
                  <?php
            }
            
            ?>
        </select>
        <br>
        Enter Quantity:<input type="number" name="quty" class="form-control" placeholder="Enter quantity"><br>
        Enter Rate:<input type="number" name="rat" class="form-control" placeholder="Enter rate"><br>
        <button type="submit" class="btn btn-gradient-primary me-2">Insert</button><br>   
        </form>

<?php
         include "footer.php";
        ?>
         </div>
        </div>
        </div>
        </div>