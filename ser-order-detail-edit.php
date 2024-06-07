<!doctype html>
<?php
include "header.php";
include "dbcon.php";
?>
<?php
$id=$_GET['id'];
$rs=mysqli_query($con,"select * from service_order_detail where SVO_ID=$id");
$row=mysqli_fetch_assoc($rs);
$sdi=$row['SVO_ID'];
$soid=$row['SV_ID'];
$srid=$row['SERVICE_ID'];
$quty=$row['QUANTITY'];
$rate=$row['RATE'];
$sate=$row['STATUS'];
$inta=$row['INSTRUCTION'];

if($_SERVER['REQUEST_METHOD']=="POST")
{
    $soid=$_POST['soid'];
    $seid=$_POST['seid'];
    $quty=$_POST['quty'];
    $rate=$_POST['rate'];
    $sate=$_POST['sate'];
    $inta=$_POST['inta'];
    if(mysqli_query($con,"update service_order_detail set SV_ID='$soid',SERVICE_ID='$seid',QUANTITY='$quty',RATE='$rate',STATUS='$sate',INSTRUCTION='$inta'where SVO_ID='$sdi'"))
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
    <h3 class="page-title"> Updation in service order details </h3>
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
        
        Enter Service order id
        <select name="soid" class="form-control">
        <?php
            $rs=mysqli_query($con,"select * from service_order");
            while($row=mysqli_fetch_assoc($rs))
            {
          ?> 
              <option value="<?php echo $row['SV_ID'];?>"><?php echo $row['CUSTOMER_ID'];?></option>
                  <?php
            }
            
            ?>
        </select>
        <br>
        Enter Service id:
        <select name="seid" class="form-control">
        <?php
            $rs=mysqli_query($con,"select * from service");
            while($row=mysqli_fetch_assoc($rs))
            {
          ?> 
              <option value="<?php echo $row['SERVICE_ID'];?>"><?php echo $row['S_NAME'];?></option>
                  <?php
            }
            
            ?>
        </select>
        <br>
        <label for="exampleInputUsername2" class="col-sm-3 col-form-label"><b>Enter quantity</b></label>
        <input class="form-control"  placeholder="Enter quantity" type="number" name="quty" value="<?php echo $quty;?>"><br>
        <label for="exampleInputUsername2" class="col-sm-3 col-form-label"><b>Enter Rate</b></label>
        <input class="form-control"  placeholder=" Enter Rate" type="number" name="rate" value="<?php echo $rate;?>"><br>
        <label for="exampleInputUsername2" class="col-sm-3 col-form-label"><b>Enter status</b></label>
        <input class="form-control"  placeholder=" Enter Rate" type="text" name="sate" value="<?php echo $sate;?>"><br>
        <label for="exampleInputUsername2" class="col-sm-3 col-form-label"><b>Enter Instruction</b></label>
        <input class="form-control"  placeholder=" Enter Rate" type="text" name="inta" value="<?php echo $inta;?>"><br>
        <button type="submit" class="btn btn-gradient-primary me-2">Update</button><br>   
        </form>
        </div>
        </div>
        </body>
</html>

<?php
   include "footer.php";
?>