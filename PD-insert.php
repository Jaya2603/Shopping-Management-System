<!doctype html>
<?php
include "header.php";
include "dbcon.php";
?>
<?php
if($_SERVER['REQUEST_METHOD']=="POST")
{
   
    $pdname=$_POST['pdname'];
    $pdsize=$_POST['pdsize'];
    $pdcolor=$_POST['pdcolor'];
    $pdrp=$_POST['pdrp'];
    $pdop=$_POST['pdop'];
    //echo "insert into product_details (P_ID,SIZE_ID,COLOR_ID,REGULAR_PRICE,OFFER_PRICE) values('$pdname','$pdsize','$pdcolor','$pdrp','$pdop')";
    if(mysqli_query($con,"insert into product_details (P_ID,SIZE_ID,COLOR_ID,REGULAR_PRICE,OFFER_PRICE) values('$pdname',$pdsize,'$pdcolor','$pdrp','$pdop')"))
    {?>
        <div class="col-sm-6 col-md-4 col-lg-3">
        <i class="mdi mdi-checkbox-marked-circle">Data Inserted Successfully</i> 
                          </div>
                          <?php
    }
    else
    {?>
        <div class="col-sm-6 col-md-4 col-lg-3">
                            <i class="mdi mdi-bell-ring"></i>
                          </div>
                          <?php
            echo "Some error please try again";
    }
}
?>
<div class="main-panel">
<div class="content-wrapper">
  <div class="page-header">
    <h3 class="page-title"> Insertion in Product-Details Table </h3>
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
        <form method="post" class="forms-sample">
        Select Product Name:
        <select name="pdname" class="form-control">
        <?php
            $rs=mysqli_query($con,"select * from Product");
            while($row=mysqli_fetch_assoc($rs))
            {
          ?> 
              <option value="<?php echo $row['P_ID'];?>"><?php echo $row['P_NAME'];?></option>
                  <?php
            }
            
            ?>
        </select>
        <br>
        Select Size:
        <select name="pdsize" class="form-control" >
        <option value=NULL>--DON'T SELECT IT IF YOU WANT NULL--</option>
        <?php
            $rs=mysqli_query($con,"select * from Size");
            while($row=mysqli_fetch_assoc($rs))
            {
          ?> 
              <option value="<?php echo $row['SIZE_ID'];?>"><?php echo $row['SIZE'];?></option>
                  <?php
            }
            
            ?>
        </select>
        <br>
        Select Color:
        <select name="pdcolor" class="form-control" >
        <?php
            $rs=mysqli_query($con,"select * from Color");
            while($row=mysqli_fetch_assoc($rs))
            {
          ?> 
              <option value="<?php echo $row['COLOR_ID'];?>"><?php echo $row['COLOR_NAME'];?></option>
                  <?php
            }
            
            ?>
        </select>
        <br>
        Enter Regular Price:<input type="number" name="pdrp" class="form-control" placeholder="Regular Price"><br>
        Enter Offer Price:<input type="number" name="pdop" class="form-control" placeholder="Offer Price"><br>
        <button type="submit" class="btn btn-gradient-primary me-2">Insert</button><br>   
        </form>

<?php
         include "footer.php";
        ?>
         </div>
        </div>
        </div>
        </div>
