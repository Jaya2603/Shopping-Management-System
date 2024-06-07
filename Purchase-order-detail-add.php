<?php
include "header.php";
include "dbcon.php";
?>
<?php
if($_SERVER['REQUEST_METHOD']=="POST")
{
  $purid=$_POST['purid'];
  $pdid=$_POST['pdid'];
  $qut=$_POST['qut'];
  $rt=$_POST['rt'];
    //echo "insert into employee_schedule(E_ID,SALES_ID,SERVICE_ID,PURPOSE,DATE_TIME,STATUS) values('$esn','$ess','$esse','$espur','$esdandt','$esst')";
    if(mysqli_query($con,"insert into purchase_order_detail(PURCHASE_ID,PD_ID,QUANTITY,RATE) values('$purid','$pdid','$qut','$rt')"))
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
    <nav aria-label="breadcrumb">
    <h3 class="page-title"> INSERTION IN PURCHASE ORDER DETAIL </h3>
      <ol class="breadcrumb">
      </ol>
    </nav>
  </div>
  <div class="col-lg-8 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
<!doctype html>
<html lang=en>
    <head>
        <meta charset="utf-8">
        <title>shopping db</title>
    </head> 
       <form  class="forms-sample" method="post" >
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
        Enter Quantity:<input type="number" name="qut" class="form-control" placeholder="Quantity"><br>
        Enter Rate:<input type="number" name="rt" class="form-control" placeholder="Rate"><br>
        <button type="submit" class="btn btn-gradient-primary me-2">Insert</button><br>   
    </form> 
    <?php

         include "footer.php";
        ?>
        </div>
        </div>
        </div>
        </div>

