<!doctype html>
<?php
include "header.php";
include "dbcon.php";
?>
<?php
if($_SERVER['REQUEST_METHOD']=="POST")
{
   
  $spdid=$_POST['spdid'];
  $sq=$_POST['sq'];
  $sd=$_POST['sd'];
    //echo "insert into Product_Details(PD_ID,QUANTITY,DATE) values('$spdid','$sq','$sd')";
    if(mysqli_query($con,"insert into Stock(PD_ID,QUANTITY,DATE) values('$spdid','$sq','$sd')"))
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
    <h3 class="page-title"> Insertion in Stock Table </h3>
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
        Select Product_Details:
        <select name="spdid" class="form-control" >
        <?php
            $rs=mysqli_query($con,"select * from Product_Details");
            while($row=mysqli_fetch_assoc($rs))
            {
          ?> 
              <option value="<?php echo $row['PD_ID'];?>"><?php echo $row['PD_ID'];?></option>
                  <?php
            }
            
            ?>
        </select>
        <br>
        Enter Your Quantity:<input type="number" name="sq" class="form-control" placeholder="your Quantity"><br>
        Select Date:<input type="date" name="sd" class="form-control" placeholder="Select date "><br>
        <button type="submit" class="btn btn-gradient-primary me-2">Insert</button><br>   
        </form>

<?php
         include "footer.php";
        ?>
         </div>
        </div>
        </div>
        </div>
        