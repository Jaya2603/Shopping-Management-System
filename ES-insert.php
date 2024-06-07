<!doctype html>
<?php
include "header.php";
include "dbcon.php";
?>
<?php
if($_SERVER['REQUEST_METHOD']=="POST")
{
   if(isset($_POST['btninsert']))
  {  
    $esn=$_POST['esname'];
    $espur=$_POST['epur'];
    $esdandt=$_POST['edandt'];
    $esst=$_POST['est'];
    if(isset($_POST['esid']))
    {
      $ess=$_POST['esid'];
      $qry="insert into employee_schedule(E_ID,SALES_ID,PURPOSE,DATE_TIME,STATUS) values('$esn',$ess,'$espur','$esdandt','$esst')";
    }
    if(isset($_POST['esename']))
    {
      $esse=$_POST['esename'];
      $qry="insert into employee_schedule(E_ID,SERVICE_ID,PURPOSE,DATE_TIME,STATUS) values('$esn',$esse,'$espur','$esdandt','$esst')";
    }
    //echo "insert into employee_schedule(E_ID,SALES_ID,SERVICE_ID,PURPOSE,DATE_TIME,STATUS) values('$esn','$ess','$esse','$espur','$esdandt','$esst')";
    if(mysqli_query($con,$qry))
    {?>
      <div class="col-sm-6 col-md-4 col-lg-3">
      <i class="mdi mdi-checkbox-marked-circle">Data Inserted Successfully</i> 
                        </div>
                        <?php
    }
    else
    { ?>
      <div class="col-sm-6 col-md-4 col-lg-3">
                          <i class="mdi mdi-bell-ring"></i>
                        </div>
                        <?php
          echo "Some error please try again";
    }
  }
}
?>

<div class="main-panel">
<div class="content-wrapper">
  <div class="page-header">
    <h3 class="page-title"> Insertion in Employee-schedule Table </h3>
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
        <form class="forms-sample" method="post">
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
        Enter Purpose:<input type="text" name="epur" class="form-control" placeholder="your purpose"><br>
        Select Date & Time:<input type="datetime-local" name="edandt" class="form-control" placeholder="Select date time"><br>
        Enter Status:<input type="text" name="est" class="form-control" placeholder="Your Status"><br>
        <button type="submit" name="btninsert" class="btn btn-gradient-primary me-2">Insert</button><br>   
        </form>

<?php
         include "footer.php";
        ?>
         </div>
        </div>
        </div>
        </div>
        