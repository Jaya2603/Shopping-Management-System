<?php
include "header.php";
include "dbcon.php";
?>
<?php
if($_SERVER['REQUEST_METHOD']=="POST")
{
  $iid=$_POST['iid'];
  $sid=$_POST['sid'];
  $qut=$_POST['qut'];
  $rt=$_POST['rt'];
  
    //echo "insert into employee_schedule(E_ID,SALES_ID,SERVICE_ID,PURPOSE,DATE_TIME,STATUS) values('$esn','$ess','$esse','$espur','$esdandt','$esst')";
    if(mysqli_query($con,"insert into invoice_service_detail(I_ID,SERVICE_ID,QUANTITY,RATE) values('$iid','$sid','$qut','$rt')"))
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
    <h3 class="page-title"> Insertion in Invoice Service Detail Table </h3>
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
        Select Service:
        <select name="sid" class="form-control" >
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
        


                 