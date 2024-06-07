<!doctype html>
<?php
include "header.php";
include "dbcon.php";
?>
<?php
$id=$_GET['id'];
$rs=mysqli_query($con,"select * from employee_schedule where ES_ID=$id");
$esnadrow=mysqli_fetch_assoc($rs);
$eid=$esnadrow['ES_ID'];
//$esn=$esnadrow['E_NAME'];
$ess=$esnadrow['SALES_ID'];
$esse=$esnadrow['SERVICE_ID'];
$espur=$esnadrow['PURPOSE'];
$esdandt=$esnadrow['DATE_TIME'];
$esst=$esnadrow['STATUS'];
if($_SERVER['REQUEST_METHOD']=="POST")
{
  if(isset($_POST['btnedit']))
  {
    $esn=$_POST['esname'];
    $espur=$_POST['epur'];
    $esdandt=$_POST['edandt'];
    $esst=$_POST['est'];
    if(isset($_POST['esid']))
    {
      $ess=$_POST['esid'];
      $qry="update employee_schedule set E_ID='$esn',SALES_ID=$ess,PURPOSE='$espur',DATE_TIME='$esdandt',STATUS='$esst' where ES_ID=$id";
    }
    if(isset($_POST['esename']))
    {
      $esse=$_POST['esename'];
      $qry="update employee_schedule set E_ID='$esn',SERVICE_ID=$esse,PURPOSE='$espur',DATE_TIME='$esdandt',STATUS='$esst' where ES_ID=$id";
    }
    //echo "update employee_schedule set SALES_ID='$ess',SERVICE_ID='$esse',PURPOSE='$espur',DATE_TIME='$esdandt',STATUS='$esst' where ES_ID=$id";
    if(mysqli_query($con,$qry))
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
}
?>
<div class="main-panel">
<div class="content-wrapper">
  <div class="page-header">
    <h3 class="page-title"> Updation in Employee-Schedule Table </h3>
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
    <form class="forms-sample" method="post" >
        <input type="hidden" name="eid" value="<?php echo $eid;?>">
        Select Employee Name:
        <select name="esname" class="form-control"  >
        <?php
            $rs=mysqli_query($con,"select * from employee");
            while($row=mysqli_fetch_assoc($rs))
            {
          ?> 
              <option value="<?php echo $row['E_ID'];?>"><?php echo $row['E_NAME'];?></option>
                  <?php
            }
            
            ?>
        </select>
        <br>
        <input type="radio" name="choice" value="Sales">Sales</input>
        <input type="radio" name="choice" value="Service">Service</input>
        <input type="submit" name="btnchoice" value="Select"></input><br>
          <?php 
          if(isset($_POST['btnchoice']))
          {
            $ch=$_POST['choice'];
            if($ch=="Sales")
            {?>
        <br>
        Select Sales id:
        <select name="esid" class="form-control">
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
        <?php
        }
        else
        {
          ?>
        Select Service name:
        <select name="esename" class="form-control">
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
        <?php
        }
          }
          ?>
        Enter Purpose:<input type="text" name="epur" class="form-control" placeholder="your purpose" value="<?php echo $espur;?>"><br>
        Select Date & Time:<input type="text" name="edandt" class="form-control" placeholder="Select date time" value="<?php echo $esdandt;?>"><br>
        Enter Status:<input type="text" name="est" class="form-control" placeholder="Your Status" value="<?php echo $esst;?>"><br>    
        <button name="btnedit" type="submit" class="btn btn-gradient-primary me-2">Update</button>
                      
</form>

<?php
include "footer.php"
?>
</div>
        </div>
        </div>
        </div>
