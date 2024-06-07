<!doctype html>
<?php
include "header.php";
include "dbcon.php";
?>
<?php
if($_SERVER['REQUEST_METHOD']=="POST")
{
    $soid=$_POST['sid'];
    $seid=$_POST['seid'];
    $qut=$_POST['quty'];
    $rate=$_POST['rat'];
    $sat=$_POST['sat'];
    $ints=$_POST['int'];
    if(mysqli_query($con,"insert into service_order_detail (SV_ID,SERVICE_ID,QUANTITY,RATE,STATUS,INSTRUCTION) values ('$soid','$seid','$qut','$rate','$sat','$ints')"))
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
    <h3 class="page-title"> Insertion in service-order-detail </h3>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
      </ol>
    </nav>
  </div>
  <div class="col-lg-9 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
        <!doctype html>
<html lang=en>
    <head>
        <meta charset="utf-8">
        <title>shopping db</title>
    </head>   
        <form method="post" enctype="multipart/form-data">
        Select service order id:
        <select name="sid" class="form-control" >
        <?php
            $rs=mysqli_query($con,"select * from service_order");
            while($row=mysqli_fetch_assoc($rs))
            {
            ?> 
              <option value="<?php echo $row['SV_ID'];?>">
              <?php echo $row['CUSTOMER_ID'];?>
              
              </option>
                  <?php
            }
            
            ?>
        </select>
        <br>
        Select service
        <select name="seid" class="form-control" >
        <?php
            $rs=mysqli_query($con,"select * from service");
            while($row=mysqli_fetch_assoc($rs))
            {
          ?> 
              <option value="<?php echo $row['SERVICE_ID'];?>">
              <?php echo $row['S_NAME'];?>
             
              </option>
                  <?php
            }
            
            ?>
        </select>
        <br>
        Enter quantity:<input type="number" name="quty" class="form-control" placeholder="Enter quantity"><br>
        Enter Rate:<input type="number" name="rat" class="form-control" placeholder="Enter rate"><br>
        Enter Status:<input type="name" name="sat" class="form-control" placeholder="Enter Status"><br>
        Enter Instruction:<input type="name" name="int" class="form-control" placeholder="Enter Instruction"><br>
        <button type="submit" class="btn btn-gradient-primary me-2">Insert</button><br>   
        </form>

<?php
         include "footer.php";
        ?>
         </div>
        </div>
        </div>
        </div>